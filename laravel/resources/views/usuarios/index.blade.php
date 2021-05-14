@extends('layout_geral')<?php /* toda estrutura html */ ?>
@section('content') <?php /* yeld(content) */ ?>
<h2 class="a-center">Funcionários 
    <button type="button" class="btn btn-primary btn-success" data-title="New" data-toggle="modal" data-target="#new">Novo</button>
</h2>
<div class="table-responsive">
    <table id="mytable" class="table table-bordred table-striped">
        <thead>
            <th>Nome</th>
            <th>Login</th>
            <th>Filial</th>
            <th>Tipo</th>
            <th>Ações</th>
        </thead>
        <tbody>
            <tr>
                <td><input type="checkbox" class="checkthis" /></td>
                <td>Marcos Barbalho Moreira</td>
                <td>Principal</td>
                <td>01/01/2021</td>
                <td>marcos.barbalho.w@gmail.com</td>
                <td>31992630656</td>
                <td>
                    <p data-placement="top" data-toggle="tooltip" title="Edit"><button
                            class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal"
                            data-target="#edit"><span
                                class="glyphicon glyphicon-pencil"></span></button></p>
                </td>
                <td>
                    <p data-placement="top" data-toggle="tooltip" title="Delete"><button
                            class="btn btn-danger btn-xs" data-title="Delete"
                            data-toggle="modal" data-target="#delete"><span
                                class="glyphicon glyphicon-trash"></span></button></p>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" class="checkthis" /></td>
                <td>Marcos Barbalho Moreira</td>
                <td>Principal</td>
                <td>01/01/2021</td>
                <td>marcos.barbalho.w@gmail.com</td>
                <td>31992630656</td>
                <td>
                    <p data-placement="top" data-toggle="tooltip" title="Edit"><button
                            class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal"
                            data-target="#edit"><span
                                class="glyphicon glyphicon-pencil"></span></button></p>
                </td>
                <td>
                    <p data-placement="top" data-toggle="tooltip" title="Delete"><button
                            class="btn btn-danger btn-xs" data-title="Delete"
                            data-toggle="modal" data-target="#delete"><span
                                class="glyphicon glyphicon-trash"></span></button></p>
                </td>
            </tr>

            <tr>
                <td><input type="checkbox" class="checkthis" /></td>
                <td>Marcos Barbalho Moreira</td>
                <td>Principal</td>
                <td>01/01/2021</td>
                <td>marcos.barbalho.w@gmail.com</td>
                <td>31992630656</td>
                <td>
                    <p data-placement="top" data-toggle="tooltip" title="Edit"><button
                            class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal"
                            data-target="#edit"><span
                                class="glyphicon glyphicon-pencil"></span></button></p>
                </td>
                <td>
                    <p data-placement="top" data-toggle="tooltip" title="Delete"><button
                            class="btn btn-danger btn-xs" data-title="Delete"
                            data-toggle="modal" data-target="#delete"><span
                                class="glyphicon glyphicon-trash"></span></button></p>
                </td>
            </tr>

            <tr>
                <td><input type="checkbox" class="checkthis" /></td>
                <td>Marcos Barbalho Moreira</td>
                <td>Principal</td>
                <td>01/01/2021</td>
                <td>marcos.barbalho.w@gmail.com</td>
                <td>31992630656</td>
                <td>
                    <p data-placement="top" data-toggle="tooltip" title="Edit"><button
                            class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal"
                            data-target="#edit"><span
                                class="glyphicon glyphicon-pencil"></span></button></p>
                </td>
                <td>
                    <p data-placement="top" data-toggle="tooltip" title="Delete"><button
                            class="btn btn-danger btn-xs" data-title="Delete"
                            data-toggle="modal" data-target="#delete"><span
                                class="glyphicon glyphicon-trash"></span></button></p>
                </td>
            </tr>

            <tr>
                <td><input type="checkbox" class="checkthis" /></td>
                <td>Marcos Barbalho Moreira</td>
                <td>Principal</td>
                <td>01/01/2021</td>
                <td>marcos.barbalho.w@gmail.com</td>
                <td>31992630656</td>
                <td>
                    <p data-placement="top" data-toggle="tooltip" title="Edit"><button
                            class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal"
                            data-target="#edit"><span
                                class="glyphicon glyphicon-pencil"></span></button></p>
                </td>
                <td>
                    <p data-placement="top" data-toggle="tooltip" title="Delete"><button
                            class="btn btn-danger btn-xs" data-title="Delete"
                            data-toggle="modal" data-target="#delete"><span
                                class="glyphicon glyphicon-trash"></span></button></p>
                </td>
            </tr>

            <tr>
                <td><input type="checkbox" class="checkthis" /></td>
                <td>Marcos Barbalho Moreira</td>
                <td>Principal</td>
                <td>01/01/2021</td>
                <td>marcos.barbalho.w@gmail.com</td>
                <td>31992630656</td>
                <td>
                    <p data-placement="top" data-toggle="tooltip" title="Edit"><button
                            class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal"
                            data-target="#edit"><span
                                class="glyphicon glyphicon-pencil"></span></button></p>
                </td>
                <td>
                    <p data-placement="top" data-toggle="tooltip" title="Delete"><button
                            class="btn btn-danger btn-xs" data-title="Delete"
                            data-toggle="modal" data-target="#delete"><span
                                class="glyphicon glyphicon-trash"></span></button></p>
                </td>
            </tr>

            <tr>
                <td><input type="checkbox" class="checkthis" /></td>
                <td>Marcos Barbalho Moreira</td>
                <td>Principal</td>
                <td>01/01/2021</td>
                <td>marcos.barbalho.w@gmail.com</td>
                <td>31992630656</td>
                <td>
                    <p data-placement="top" data-toggle="tooltip" title="Edit"><button
                            class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal"
                            data-target="#edit"><span
                                class="glyphicon glyphicon-pencil"></span></button></p>
                </td>
                <td>
                    <p data-placement="top" data-toggle="tooltip" title="Delete"><button
                            class="btn btn-danger btn-xs" data-title="Delete"
                            data-toggle="modal" data-target="#delete"><span
                                class="glyphicon glyphicon-trash"></span></button></p>
                </td>
            </tr>

            <tr>
                <td><input type="checkbox" class="checkthis" /></td>
                <td>Marcos Barbalho Moreira</td>
                <td>Principal</td>
                <td>01/01/2021</td>
                <td>marcos.barbalho.w@gmail.com</td>
                <td>31992630656</td>
                <td>
                    <p data-placement="top" data-toggle="tooltip" title="Edit"><button
                            class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal"
                            data-target="#edit"><span
                                class="glyphicon glyphicon-pencil"></span></button></p>
                </td>
                <td>
                    <p data-placement="top" data-toggle="tooltip" title="Delete"><button
                            class="btn btn-danger btn-xs" data-title="Delete"
                            data-toggle="modal" data-target="#delete"><span
                                class="glyphicon glyphicon-trash"></span></button></p>
                </td>
            </tr>

            <tr>
                <td><input type="checkbox" class="checkthis" /></td>
                <td>Marcos Barbalho Moreira</td>
                <td>Principal</td>
                <td>01/01/2021</td>
                <td>marcos.barbalho.w@gmail.com</td>
                <td>31992630656</td>
                <td>
                    <p data-placement="top" data-toggle="tooltip" title="Edit"><button
                            class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal"
                            data-target="#edit"><span
                                class="glyphicon glyphicon-pencil"></span></button></p>
                </td>
                <td>
                    <p data-placement="top" data-toggle="tooltip" title="Delete"><button
                            class="btn btn-danger btn-xs" data-title="Delete"
                            data-toggle="modal" data-target="#delete"><span
                                class="glyphicon glyphicon-trash"></span></button></p>
                </td>
            </tr>
        </tbody>
    </table>
    <div class="clearfix"></div>
    <ul class="pagination pull-right">
        <li class="disabled"><a href="#"><span
                    class="glyphicon glyphicon-chevron-left"></span></a></li>
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
    </ul>
</div>
@endsection