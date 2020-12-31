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
                    <div class="inbox_chat">
                        <div class="chat_list active_chat">
                            <div class="chat_people">
                                <div class="chat_ib">
                                    <h5>User Sender <span class="chat_date">Dec 25</span></h5>
                                </div>
                            </div>
                        </div>
                        <div class="chat_list">
                            <div class="chat_people">
                                <div class="chat_ib">
                                    <h5>User Sender <span class="chat_date">Dec 25</span></h5>
                                </div>
                            </div>
                        </div>
                        <div class="chat_list">
                            <div class="chat_people">
                                <div class="chat_ib">
                                    <h5>User Sender <span class="chat_date">Dec 25</span></h5>
                                </div>
                            </div>
                        </div>
                        <div class="chat_list">
                            <div class="chat_people">
                                <div class="chat_ib">
                                    <h5>User Sender <span class="chat_date">Dec 25</span></h5>
                                </div>
                            </div>
                        </div>
                        <div class="chat_list">
                            <div class="chat_people">
                                <div class="chat_ib">
                                    <h5>User Sender <span class="chat_date">Dec 25</span></h5>
                                </div>
                            </div>
                        </div>
                        <div class="chat_list">
                            <div class="chat_people">
                                <div class="chat_ib">
                                    <h5>User Sender <span class="chat_date">Dec 25</span></h5>
                                </div>
                            </div>
                        </div>
                        <div class="chat_list">
                            <div class="chat_people">
                                <div class="chat_ib">
                                    <h5>User Sender <span class="chat_date">Dec 25</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mesgs">
                    <div class="msg_history" id="chat-screen" data-sync="{{ route('chat_messages') }}" data-from="0">
                        <div class="incoming_msg">
                            <div class="received_msg">
                                <div class="received_withd_msg">
                                    <p>This is just a mockup of how chat manager side will looks like.</p>
                                    <span class="time_date"> 11:01 AM |Dec 31</span></div>
                            </div>
                        </div>
                        <div class="outgoing_msg">
                            <div class="sent_msg">
                                <p>This is just a mockup of how chat manager side will looks like.</p>
                                <span class="time_date"> 11:01 AM |Dec 31</span></div>
                        </div>
                        <div class="incoming_msg">
                            <div class="received_msg">
                                <div class="received_withd_msg">
                                    <p>I'll respond to your message</p>
                                    <span class="time_date"> 11:01 AM | Dec 31</span></div>
                            </div>
                        </div>
                        <div class="outgoing_msg">
                            <div class="sent_msg">
                                <p>Do not test my patience!</p>
                                <span class="time_date"> 11:01 AM | Dec 31</span></div>
                        </div>
                        <div class="incoming_msg">
                            <div class="received_msg">
                                <div class="received_withd_msg">
                                    <p>Still need to apply sync to this code.</p>
                                    <span class="time_date"> 11:01 AM | Dec 31</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="type_msg">
                        <div class="input_msg_write">
                            <input type="text" class="write_msg" placeholder="Type a message"/>
                            <button class="msg_send_btn" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
