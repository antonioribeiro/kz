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
                            <h4>{{ t('titles.welcome') }}</h4>
                            <p class="m-b-5">{{'paragraphs.welcome-message'}}</p>
                        </td>
                    </tr>
                </table>
            </td>
            <!-- end wrapper -->
        </tr>
    </table>
    <!-- end row -->
@stop
