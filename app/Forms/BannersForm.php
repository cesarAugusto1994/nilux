<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class BannersForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('nome', 'text', [
                'label' => 'Nome',
                'rules' => 'required|max:255',
              ])
            ->add('link', 'file', [
                'label' => 'Link',
                'rules' => 'required',
              ])
            ->add('ativo', 'checkbox', [
                  'value' => 1,
                  'checked' => true
              ])
            ->add('submit', 'submit', ['label' => 'Salvar', 'class' => 'btn btn-success']);
    }
}
