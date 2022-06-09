<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Userss;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class UserssController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Userss(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('name');
            $grid->column('email');
            $grid->column('password');
            $grid->column('email_verified_at');
            $grid->column('remeber_token');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
        
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
        
            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new Userss(), function (Show $show) {
            $show->field('id');
            $show->field('id');
            $show->field('name');
            $show->field('email');
            $show->field('password');
            $show->field('email_verified_at');
            $show->field('remeber_token');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Userss(), function (Form $form) {
            $form->display('id');
            $form->text('name');
            $form->text('email');
            $form->text('password');
            $form->text('email_verified_at');
            $form->text('remeber_token');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
