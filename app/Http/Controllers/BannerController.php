<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Okipa\LaravelBootstrapTableList\TableList;
use Kris\LaravelFormBuilder\FormBuilder;
use App\Models\Banner;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table = app(TableList::class)
           ->setModel(Banner::class)
           ->setRoutes([
               'index'      => ['alias' => 'banners.index', 'parameters' => []],
               'edit'       => ['alias' => 'banners.edit', 'parameters' => []],
               'destroy'    => ['alias' => 'banners.destroy', 'parameters' => []],
           ]);
         // we add some columns to the table list
         $table->addColumn('nome')
           ->setTitle('Nome')
           ->isSortable()
           ->isSearchable()
           ->useForDestroyConfirmation();
         $table->addColumn('link')
           ->setTitle('Link');
         $table->addColumn('ativo')
           ->setTitle('Ativo')
           ->isCustomValue(function ($entity, $column) {
               return $entity->ativo ? 'Ativo' : 'Inativo';
             });

         return view('admin.banners.index', compact('table'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(\App\Forms\BannersForm::class, [
            'method' => 'POST',
            'url' => route('banners.store')
        ]);

        return view('admin.banners.create', compact('form'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormBuilder $formBuilder, Request $request)
    {
        $form = $formBuilder->create(\App\Forms\BannersForm::class);

        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }

        $data=$form->getFieldValues();

        if($data['ativo'] != true) {
          $data['ativo'] = false;
        }

        if ($request->hasFile('link') && $request->file('link')->isValid()) {
            $data['link'] = $request->link->store('banners');
        }

        Banner::create($data);

        flash('Banner adicionado com sucesso.')->success()->important();

        return redirect()->route('banners.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(FormBuilder $formBuilder, $id)
    {
        $banner = Banner::findOrFail($id);

        $form = $formBuilder->create(\App\Forms\BannersForm::class,
            [
              'model' => $banner,
              'method' => 'POST',
              'url' => route('banners.update', $id),
            ]
        );

        $form->add('_method', 'hidden', ['value' => 'PUT']);

        return view('admin.banners.edit', compact('form'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(FormBuilder $formBuilder, Request $request, $id)
    {
        $form = $formBuilder->create(\App\Forms\BannersForm::class);

        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }

        $banner = Banner::findOrFail($id);

        $data=$form->getFieldValues();

        if($data['ativo'] != true) {
          $data['ativo'] = false;
        }

        if ($request->hasFile('link') && $request->file('link')->isValid()) {
            $data['link'] = $request->link->store('banners');
        }

        $banner->update($data);

        flash('Banner atualizado com sucesso.')->success()->important();

        return redirect()->route('banners.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);
        $banner->delete();

        flash('Banner removido com sucesso.')->success()->important();

        return redirect()->route('banners.index');
    }
}
