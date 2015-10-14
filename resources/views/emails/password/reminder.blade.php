@extends('layouts.email')

@section('content')
    <!-- begin row -->
    <table class="row">
        <tr>
            <!-- begin wrapper -->
            <td class="wrapper">
                <table class="twelve columns">
                    <tr>
                        <td class="last">
                            <h4>{{ t('titles.reset-your-password') }}</h4>
                            <p class="m-b-5">{{'paragraphs.to-reset-your-password'}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="panel">
                            <a href="{!! URL::to('password/reset', [$token]) !!}">{{ URL::to('password/reset', [$token]) }}</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="m-t-15 last">Se o link não funcionar, por favor copie a URL para a barra de endereço do browser.</p>
                        </td>
                    </tr>
                </table>
            </td>
            <!-- end wrapper -->
        </tr>
    </table>
    <!-- end row -->
@stop
