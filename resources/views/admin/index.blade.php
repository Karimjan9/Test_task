@extends('template')

@section('body')

<div class="page-wrapper">
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Articles</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        {{-- <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a> --}}
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

        {{-- <div class="d-flex align-items-center">
            <h6 class="mb-0 text-uppercase">Articles</h6>
        </div> --}}

        <div class="d-flex align-items-center">
            <div class="ms-auto">
                <a href="{{ route('admin.admin_work.create') }}" class="btn btn-primary px-3"><i class="bx bx-plus"></i>Add Article</a>
            </div>
        </div>


        <hr>
        <div class="row">
            <div class="starter-template">
                @if(session()->has('success'))
                    <p class="alert alert-success">{{ session()->get('success') }}</p>
                @endif
                @if(session()->has('warning'))
                    <p class="alert alert-warning">{{ session()->get('warning') }}</p>
                @endif
                
        </div>

        <div class="card radius-10">
                 <div class="card-body">

                    <div class="">
                        <table class="table table-bordered align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="fixed_header2 align-middle">#</th>
                                    <th class="fixed_header2 align-middle">Artivel theme</th>
                                    <th class="fixed_header2 align-middle">Artivle body</th>
                                    <th class="fixed_header2 align-middle">Harakatlar</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($articles as $i => $article)
                                    <tr>
                                        <td>
                                            {{ ++$i }}
                                        </td>
                                        <td>
                                            {{ $article->article_theme }}
                                        </td>
                                        <td>{{  $article->article_body}}</td>
                                       
                                       
                                        <td class="d-flex align-items-center">
                                            <a href="{{ route('admin.admin_work.edit',['admin_work'=>$article->id]) }}" class="btn btn-sm btn-warning text-white me-2"></i>Edit</a>
                                            <form action="{{ route('admin.admin_work.destroy',['admin_work'=>$article->id]) }}" method="post">
                                                @csrf
                                                @method("DELETE")
                                                <input class="btn btn-sm btn-danger confirm-button" type="submit" value="Delete">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="card-body">

                            {{ $articles->links("pagination::bootstrap-5") }}
                        </div>
                    </div>
                 </div>
            </div>
        </div>
   </div>
</div>

@endsection