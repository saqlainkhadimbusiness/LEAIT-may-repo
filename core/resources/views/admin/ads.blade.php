@extends('admin.layouts.app')

@section('panel')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body p-0">
                    <div class="table-responsive--md table-responsive">
                        <table class="table table--light style--two">
                            <thead>
                            <tr>
                                <th scope="col">@lang('Sl')</th>
{{--                                <th scope="col">@lang('Title')</th>--}}
                                <th scope="col">@lang('Ad Link')</th>
                                <th scope="col">@lang('Ad Timer')</th>

                                <th scope="col">@lang('Status')</th>
                                <th scope="col">@lang('Action')</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($plans as $key => $plan)
                                <tr>
                                    <td data-label="@lang('Sl')">{{$key+1}}</td>
{{--                                    <td data-label="@lang('Name')">{{ __($plan->ads_title) }}</td>--}}
                                    <td data-label="@lang('Price')"><a href="{{ $plan->ad_link }}" target="_blank">{{ $plan->ad_link }}</a></td>
                                    <td data-label="@lang('Total Ads')">{{ $plan->ad_timer }}</td>

                                    <td data-label="@lang('Status')">
                                        @if($plan->ad_status == 1)
                                            <span class="text--small badge font-weight-normal badge--success">@lang('Active')</span>
                                        @else
                                            <span class="text--small badge font-weight-normal badge--danger">@lang('Inactive')</span>
                                        @endif
                                    </td>

                                    <td data-label="@lang('Action')">
                                        <button type="button" class="icon-btn edit" data-toggle="tooltip"
                                                data-id="{{ $plan->id }}"
{{--                                                data-title="{{ $plan->ads_title }}"--}}
                                                data-status="{{ $plan->ad_status }}"
                                                data-link="{{$plan->ad_link }}"
{{--                                                data-des="{{$plan->ad_description }}"--}}
                                                data-timer="{{$plan->ad_timer }}"
                                                data-original-title="Edit">
                                            <i class="la la-pencil"></i>
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-muted text-center" colspan="100%">{{ __($empty_message) }}</td>
                                </tr>
                            @endforelse

                            </tbody>
                        </table><!-- table end -->
                    </div>
                </div>
                <div class="card-footer py-4">
                    {{ $plans->links('admin.partials.paginate') }}
                </div>
            </div>
        </div>
    </div>


{{--    edit modal--}}
    <div id="edit-plan" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">@lang('Edit Ad')</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                <form method="post" action="{{route('admin.updateads')}}">
                    @csrf
                    <div class="modal-body">

                        <input class="form-control ad_id" type="hidden" name="id">
{{--                        <div class="form-row">--}}
{{--                            <div class="form-group col-md-12">--}}
{{--                                <label class="font-weight-bold"> @lang('Ad Title') :</label>--}}
{{--                                <input type="text" class="form-control ad_title" name="ad_title"--}}
{{--                                       required>--}}
{{--                            </div>--}}

{{--                        </div>--}}
                        <div class="form-group">
                            <label class="font-weight-bold"> @lang('Ad Link')</label>
                            <input class="form-control ad_link" name="ad_link" type="text" required>
                        </div>
{{--                        <div class="form-group">--}}
{{--                            <label class="font-weight-bold"> @lang('Ad Description')</label>--}}
{{--                            <input class="form-control ad_description" name="ad_description" type="text" required>--}}
{{--                        </div>--}}
                       {{-- <div class="form-group">
                            <label class="font-weight-bold"> @lang('Ad Time')</label>
                            <input class="form-control ad_timer" type="number" min="0" name="ad_time" required>


                        </div>--}}

                        <div class="form-row">
                            <div class="form-group col">
                                <label class="font-weight-bold">@lang('Status')</label>
                                <input type="checkbox" data-width="100%" data-onstyle="-success" data-offstyle="-danger" data-toggle="toggle" data-on="@lang('Active')" data-off="@lang('Inactive')" name="status" checked>
                            </div>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-block btn--primary">@lang('Update')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="add-plan" class="modal  fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">@lang('Add New Ad')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="{{route('admin.storeads')}}">
                    @csrf
                    <div class="modal-body">

                        <input class="form-control ads_id" type="hidden" name="id">
{{--                        <div class="form-row">--}}
{{--                            <div class="form-group col-md-12">--}}
{{--                                <label class="font-weight-bold"> @lang('Ad Title') :</label>--}}
{{--                                <input type="text" class="form-control " name="ad_title"--}}
{{--                                       required>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="form-group">
                            <label class="font-weight-bold"> @lang('Ad Link')</label>
                            <input class="form-control" name="ad_link" type="text" required>
                        </div>
                        {{--<div class="form-group">
                            <label class="font-weight-bold"> @lang('Ad Description')</label>
                            <input class="form-control" name="ad_description" type="text" required>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold"> @lang('Ad Time')</label>
                            <input class="form-control " type="number" min="0" name="ad_time" required>


                        </div>--}}

                        <div class="form-row">
                            <div class="form-group col">
                                <label class="font-weight-bold">@lang('Status')</label>
                                <input type="checkbox" data-width="100%" data-onstyle="-success" data-offstyle="-danger" data-toggle="toggle" data-on="@lang('Active')" data-off="@lang('Inactive')" name="status" checked>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn-block btn btn--primary">@lang('Submit')</button>
                    </div>
                </form>

            </div>
        </div>
    </div>


@endsection



@push('breadcrumb-plugins')
    <a href="javascript:void(0)" class="btn btn-sm btn--success add-plan"><i class="fa fa-fw fa-plus"></i>@lang('Add New')</a>

@endpush

@push('script')
    <script>
        "use strict";
        (function ($) {
            $('.edit').on('click', function () {
                var modal = $('#edit-plan');
                // modal.find('.ad_title').val($(this).data('title'));
                modal.find('.ad_link').val($(this).data('link'));
                // modal.find('.ad_description').val($(this).data('des'));
                // modal.find('.ad_timer').val($(this).data('timer'));
                /*modal.find('.ref_com').val($(this).data('ref_com'));
                modal.find('.tree_com').val($(this).data('tree_com'));
                modal.find('input[name=daily_ad_limit]').val($(this).data('daily_ad_limit'));*/

                if($(this).data('status')){
                    modal.find('.toggle').removeClass('btn--danger off').addClass('btn--success');
                    modal.find('input[name="status"]').prop('checked',true);

                }else{
                    modal.find('.toggle').addClass('btn--danger off').removeClass('btn--success');
                    modal.find('input[name="status"]').prop('checked',false);
                }

                modal.find('input[name=id]').val($(this).data('id'));
                modal.modal('show');
            });

            $('.add-plan').on('click', function () {
                var modal = $('#add-plan');
                modal.modal('show');
            });
        })(jQuery);
    </script>
@endpush

