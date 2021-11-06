@extends('layouts.top')
@section('content')
    <!-- FIXME:ロード画面 -->

    <div id="overlay">
        <div class="cv-spinner">
            <span class="spinner"></span>
        </div>
    </div>
    <!--------------------------------------------ヘッダー---------------------------------------->
    <header>
        <div class="headerInner">
            <div class="headerInner_left">
                <img class="headerInner_posse" src="/img/posseLogo.png">
                <div class="headerInner_text">
                    <div>{{$week}}week </div>
                </div>
            </div>
            <button id="openModal">記録・投稿</button>
        </div>
    </header>

    <main class="main">
        <div class="container">
            <!-- left->studyTime -->
            <div class="studyTime">
                <div class="studyTime_boxes">

                    <div class="studyTime_box">
                        <div class="studyTime_box_title">
                            Today
                        </div>
                        <span class="number" id = "today_time"></span>
                        <div class="studyTime_box_hour">
                            hour
                        </div>
                    </div>
                    <div class="studyTime_box">
                        <div class="studyTime_box_title">
                            Month
                        </div>
                        <span class="number" id = "month_time"></span>
                        <div class="studyTime_box_hour">
                            hour
                        </div>
                    </div>
                    <div class="studyTime_box">
                        <div class="studyTime_box_title">
                            <div>Total</div>
                        </div>
                        <span class="number" id = "all_time"></span>
                        <div class="studyTime_box_hour">
                            <div>hour</div>
                        </div>
                    </div>
                </div>
                <div class="studyTime_barGraph_Box">
                    <div id="bargraph"></div>
                </div>
            </div>
            <div class="pieChart">

                <div class="pieChart_box">
                    <div class="pieChart_box_title">
                        <h2>学習言語</h2>
                    </div>
                    <div id="pieChart_language">
                    </div>
                    <div class="pieChart_box_legends">
                        <!--TODO:要素をdivで括って、classつけてpadding??  -->
                        @foreach ($languages as $language)    
                            <span class="circle" style="background: {{$language->colour}};"></span><span class="legend">{{$language->name}}</span></span>
                        @endforeach
                    </div>
                </div>

                <div class="pieChart_box">
                    <div class="pieChart_box_title">
                        <h2>学習コンテンツ</h2>
                    </div>
                    <!-- <img class="pieChart_box_img" src="img/time.png"> -->
                    <div id="pieChart_contents">
                    </div>
                    <div class="pieChart_box_legends">
                        @foreach ($contents as $content)    
                        <span class="circle" style="background: {{$content->colour}};"></span><span class="legend">{{$content->name}}</span></span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- モーダルエリアここから -->
        <!--TODO: ロード画面の作成 -->
        <section id="modalArea" class="modalArea">
            <div id="modalBg" class="modalBg"></div>
            <div class="modalWrapper">
                <!-- 成功時の画像(display noneにしてある) -->
                <div class="success_img" id="success">
                    <img src="img/success.png">
                </div>

                <div class="modalContents" id="modal_contents">
                    <form action="{{route('send_data')}}" method="post" id="modal_form">
                        @csrf
                        <input type="hidden" value="{{Auth::id()}}" name="user_id">
                        <div class="modal_top">
                            <div class="modal_top_left">

                                <div class="modal_day_text">
                                    学習日
                                </div>

                                <div class="modal_day_box">
                                    <input name="date" type="date" />
                                </div>

                                <div class="modal_contents_text">学習コンテンツ(複数選択可)</div>
                                <!-- チェックbox -->
                                <div class="modal_contents_choices">
                                    @foreach ($contents as $content)                                        
                                    <input id="modal_check{{$content->id}}" value="{{$content->id}}" type="checkbox" name="checkbox01[]"><label
                                        for="modal_check{{$content->id}}" class="checkbox01">&emsp;&emsp;{{$content->name}}</label>
                                    @endforeach
                                </div> 
                                    <div class="modal_contents_text">学習学習言語(複数選択可)</div>
                                <div class="modal_contents_choices">
                                    @foreach ($languages as $language)                                        
                                    <input id="modal_check{{$language->id}}" value="{{$language->id}}" type="checkbox" name="checkbox01[]"><label
                                        for="modal_check{{$language->id}}" class="checkbox01">&emsp;&emsp;{{$language->name}}</label>
                                    @endforeach
                                </div>

                            </div>


                            <div class="modal_top_right">

                                <div class="modal_time_text">
                                    学習時間
                                </div>

                                <div class="modal_time_box">
                                    <input type="text" size="12" class="time_box" name = "study_time">
                                </div>

                                <div class="modal_top_right_tweetBox">
                                        twitter用コメント
                                        <br>
                                        <textarea id="txtbox" name="comment" class="tweetBox"></textarea>
                                    <input id="modal_check12" value="12" type="checkbox" name="checkbox01"><label
                                        for="modal_check12" class="checkbox01">&emsp;&emsp;Twitterに自動投稿する</label>
                                </div>
                            </div>

                        </div>


                        <div class="modal_bottom">
                            <div class="modal_button">
                                <button  type="submit" class="btn">記録・投稿</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div id="closeModal" class="closeModal">
                    ×
                </div>

            </div>
        </section>

        <div class="footer">
            <div class="footer_text">
                <label onclick="location.href='./test_2.html'" class="page_button">&lt;</label>
                2020 11月
                <label onclick="location.href='./test_1.html'" class="page_button">&gt;</label>
                <button id="openModal2">記録・投稿</button>
            </div>
        </div>

    </main>


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" type="text/javascript">
    </script>
    <script type="text/javascript" src="https://www.google.com/jsapi">
    </script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
    <script src="posse.js">
    </script>
@endsection
