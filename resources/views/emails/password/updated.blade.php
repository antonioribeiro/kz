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
                            <h4>{{ t('titles.password-updated') }}</h4>
                            <p class="m-b-5">{{'paragraphs.to-password-updated'}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            {{'paragraphs.your-password-was-updated'}}.
                        </td>
                    </tr>
                </table>
            </td>
            <!-- end wrapper -->
        </tr>
    </table>
    <!-- end row -->
@stop
