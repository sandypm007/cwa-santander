@extends('template')

@section('css')
    <link rel="stylesheet" href="{{ url('public/css/chat.css') }}">
@endsection

@section('javascripts')
    <script src="{{ url('public/js/chat.js') }}"></script>
@endsection

@section('content')
    <div class="chat-container">
        <h3 class="text-center">{{ trans('messages.template.messaging') }}</h3>
        <div class="messaging">
            <div class="inbox_msg">
                <div class="inbox_people">
                    <div class="headind_srch">
                        <div class="recent_heading">
                            <h4>{{ trans('messages.template.customers') }}</h4>
                        </div>
                        <div class="srch_bar">
                            <div class="stylish-input-group">
                                <input type="text" class="search-bar" placeholder="Search">
                                <span class="input-group-addon">
                                    <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="inbox_chat" id="chat-users" data-from="0" data-sync="{{ route('chat_users') }}"></div>
                </div>
                <div class="mesgs">
                    <div class="row">
                        <div class="col-xs-12">
                            <h5 id="chat-username"></h5>
                            <h6 id="chat-position"></h6>
                        </div>
                    </div>
                    <div class="msg_history" id="chat-screen" data-sync="{{ route('chat_messages') }}" data-from="0"></div>
                    <div class="type_msg">
                        <form name="messaging" action="{{ route('post_message') }}" action="#" method="post">
                            <div class="input_msg_write">
                                <input type="text" class="write_msg" name="message" placeholder="Type a message"/>
                                <input type="hidden" name="target" placeholder="Type a message"/>
                                <button class="msg_send_btn" type="submit"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
