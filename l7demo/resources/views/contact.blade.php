
<!-- 使用 layout CSS JS -->
@extends('layouts.application')

<!-- 抽換 -->
@section('title', 'Laravel')

@section('main')
<div class="flex-center position-ref full-height">
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <!-- 連接View Livewire/counter -  對應Controller App/HTTP/Livewire/counter -->
                            @livewire('contact')
                            </div>
                        </div>
                    </div>

                </div>

        </div>
@endsection


