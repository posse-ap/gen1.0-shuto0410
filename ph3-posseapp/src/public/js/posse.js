// ----------ペースト-----------


// モーダル
$(function () {


    $('#openModal').click(function () {
        $('#modalArea').fadeIn();
        return false
    });


    $('#openModal2').click(function () {
        $('#modalArea').fadeIn();
        return false
    });


    $('#closeModal , #modalBg').click(function () {
        $('#modalArea').fadeOut();
        return false
    });


});


// const button1 = document.getElementById('send');
// document.getElementsByClassName("modalContents").style.display ="block";

// button1.addEventListener('click', (e) => {
//     // TODO:モーダル の中身を非表示にして、数秒間ロード画面を開いた後で、終了画面に移行
//     // displayをnoneにすればいい？？
//     const p1 = document.getElementsByClassName("modalContents");
//     p1.style.display ="none";
// });

//----------------------------------ロード画面----------------------------------------

// $(".btn").on("click", function () {
//     document.getElementById("modal_contents").style.display = "none";
//     $(document).ajaxSend(function () {
//         $("#overlay").fadeIn(500);
//     });
//     $.ajax({
//         type: 'GET',
//         url:'/send_data',
//         success: function (data) {
//             // console.log(data);
//         }
//     }).done(function () {
//         setTimeout(function () {
//             $("#overlay").fadeOut(500);
//             document.getElementById("success").style.display = "block";
//         }, 3000);
//     });

//     return false;
// });

//ーーーーーーーーーーーーーーーーツイッターーーーーーーーーーーーーーー
// document.getElementById("send").addEventListener('click', function (event) {
//     event.preventDefault();
//     var left = Math.round(window.screen.width / 2 - 275);
//     var top = (window.screen.height > 420) ? Math.round(window.screen.height / 2 - 210) : 0;
//     if (document.forms.modal_form.modal_check12.checked) {
//         window.open(
//             "https://twitter.com/intent/tweet?text=" + encodeURIComponent(document.getElementById("txtbox").value),
//             null,
//             "scrollbars=yes,resizable=yes,toolbar=no,location=yes,width=550,height=420,left=" + left + ",top=" + top);
//     }

// });
google.charts.load('current', {'packages':['corechart']});

//--------------------- こっから棒グラフ---------------------------------------

function drawBarGraph(bar_graph) {
    var dataArray = [
        ['day', 'time']
    ];
    for (let i = 1; i <= 31; i++) {
        dataArray.push([i,null]);
    }
    bar_graph.forEach(function(day_data){
        var day = new Date(day_data["date"]);
        day = day.getDate();
        dataArray[day][1] = day_data["study_time"];
    });


    var chartdata = google.visualization.arrayToDataTable(dataArray);
    var options = {
        legend: 'none',
        'chartArea': { top: 10, 'width': '80%', 'height': '80%' },
        vAxis: {
            gridlines: {
                color: "#ffffff"
            },
            format: "0h"
        },
        hAxis: {
            gridlines: {
                color: "#ffffff"
            },
            viewWindow: {
                min: 1,
                max: 31,
                stepSize: 1  // 間隔
            }
        },
        baselineColor: "transparent",

        colors: ['#1754EF', '#0F71BD', '#20BDDE']

    };
    var chart = new google.visualization.ColumnChart(document.getElementById('bargraph'));
    chart.draw(chartdata, options);
}

function drawPieChart(contents,target) {
    
    var data = new Array;
    data.push(['name', 'contents']);
    var colours = new Array;

    contents.forEach(function(content){
        data.push([content["name"],content["study_time"]]);
        colours.push(content["colour"]);
    });
    var chart_data = google.visualization.arrayToDataTable(data);
    var options = {
        legend: 'none',
        'chartArea': { top: 0, 'width': '100%', 'height': '100%' },
        pieHole: 0.5,
        colors: colours,
    };
    var chart = new google.visualization.PieChart(document.getElementById(target));
    chart.draw(chart_data, options);
}

$(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    $.ajax({
        //POST通信
        type: "post",
        //ここでデータの送信先URLを指定します。
        url: "/get_data",
        dataType: "json",
        data: {
            uid: 100,
            subject: "テストタイトル",
            from: "テストfrom",
            body: "テストbody",
        },

    })
        //通信が成功したとき
        .then((res) => {
            console.log("hoge",res);
            document.getElementById('today_time').innerHTML = res["today_time"];
            document.getElementById('month_time').innerHTML = res["month_time"];
            document.getElementById('all_time').innerHTML = res["all_time"];
            drawPieChart(res["languages_time"],'pieChart_language');
            drawPieChart(res["contents_time"],'pieChart_contents');
            drawBarGraph(res['bar_graph']);
        })
        //通信が失敗したとき
        .fail((error) => {
            console.log(error.statusText);
        });
});



window.onresize = function () {
    // google.setOnLoadCallback(drawChart);
    // google.setOnLoadCallback(drawChart_2);
    // google.setOnLoadCallback(drawChart_3);
}

