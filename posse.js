// ----------ペースト-----------


// モーダル
$(function() {


    $('#openModal').click(function() {
        $('#modalArea').fadeIn();
        return false
    });


    $('#openModal2').click(function() {
        $('#modalArea').fadeIn();
        return false
    });


    $('#closeModal , #modalBg').click(function() {
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

$(".btn").on("click", function(){
    document.getElementById("modal_contents").style.display ="none";
    $(document).ajaxSend(function() {
        $("#overlay").fadeIn(500);
    });
    $.ajax({
        type: 'GET',
        success: function(data){
            console.log(data);
        }
    }).done(function() {
        setTimeout(function(){
            $("#overlay").fadeOut(500);
            document.getElementById("success").style.display ="block";
        },3000);
    });
   
    return false;
});

//ーーーーーーーーーーーーーーーーツイッターーーーーーーーーーーーーーー
document.getElementById("send").addEventListener('click', function(event) {
    event.preventDefault();
    var left = Math.round(window.screen.width / 2 - 275);
    var top = (window.screen.height > 420) ? Math.round(window.screen.height / 2 - 210) : 0;
    if(document.forms.modal_form.modal_check12.checked){
        window.open(
            "https://twitter.com/intent/tweet?text=" + encodeURIComponent(document.getElementById("txtbox").value),
            null,
            "scrollbars=yes,resizable=yes,toolbar=no,location=yes,width=550,height=420,left=" + left + ",top=" + top);
    }
    
});



//--------------------- こっから棒グラフ---------------------------------------

google.load("visualization", "1", { packages: ["corechart"] });
google.setOnLoadCallback(drawChart);

function drawChart() {
    var dataArray = [
        ['day', 'time']
    ];
    var df = $.Deferred();

    $(function() {
        $.ajax({
            url: 'study_time.json',
            dataType: 'json',
        }).done(function(data) {
            console.log("success");

            $(data).each(function() {
                var data_item = [this.day, this.time];
                dataArray.push(data_item);
            });
            df.resolve();
        }).fail(function() {
            console.log("error");
        });
    });

    df.done(function() {
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
                }
            },
            baselineColor: "transparent",

            colors: ['#1754EF', '#0F71BD', '#20BDDE']

        };
        var chart = new google.visualization.ColumnChart(document.getElementById('bargraph'));

        chart.draw(chartdata, options);
    });
}

// --------------こっから円グラフ--------------------------
//コンテンつ
google.load("visualization", "1", { packages: ["corechart"] });
google.setOnLoadCallback(drawChart_2);

function drawChart_2() {
    var df = $.Deferred();

    var sum_1 = 0;
    var sum_2 = 0;
    var sum_3 = 0;

    $(function() {
        $.ajax({
            url: 'study_contents.json',
            dataType: 'json',
        }).done(function(data) {
            console.log("success");
            $(data).each(function() {
                sum_1 = sum_1 + this.c_1;
                sum_2 = sum_2 + this.c_2;
                sum_3 = sum_3 + this.c_3;
            });

            df.resolve();
        }).fail(function() {
            console.log("error");
        });
    });

    df.done(function() {
        var chartdata_2 = google.visualization.arrayToDataTable([
            ['day', 'contents'],
            ['N予備校', sum_1],
            ['ドットインストール', sum_2],
            ['posse課題', sum_3]
        ]);
        console.log(chartdata_2);
        var options = {
            legend: 'none',
            'chartArea': { top: 0, 'width': '100%', 'height': '100%' },
            pieHole: 0.5,
            colors: ['#1754EF', '#0F71BD', '#20BDDE'],
        };
        var chart_2 = new google.visualization.PieChart(document.getElementById('pieChart_contents'));
        chart_2.draw(chartdata_2, options);
    });
}




//言語
google.load("visualization", "1", { packages: ["corechart"] });
google.setOnLoadCallback(drawChart_3);

function drawChart_3() {
    var df = $.Deferred();

    var sum_1 = 0;
    var sum_2 = 0;
    var sum_3 = 0;
    var sum_4 = 0;
    var sum_5 = 0;
    var sum_6 = 0;
    var sum_7 = 0;
    var sum_8 = 0;

    $(function() {
        $.ajax({
            url: 'study_language.json',
            dataType: 'json',
        }).done(function(data) {
            console.log("success");
            $(data).each(function() {
                sum_1 = sum_1 + this.l_1;
                sum_2 = sum_2 + this.l_2;
                sum_3 = sum_3 + this.l_3;
                sum_4 = sum_4 + this.l_4;
                sum_5 = sum_5 + this.l_5;
                sum_6 = sum_6 + this.l_6;
                sum_7 = sum_7 + this.l_7;
                sum_8 = sum_8 + this.l_8;
            });

            df.resolve();
        }).fail(function() {
            console.log("error");
        });
    });

    df.done(function() {
        var chartdata_2 = google.visualization.arrayToDataTable([
            ['day', 'contents'],
            ['HTML', sum_1],
            ['CSS', sum_2],
            ['JavaScript', sum_3],
            ['PHP', sum_4],
            ['Laraver', sum_5],
            ['SQL', sum_6],
            ['SHELL', sum_7],
            ['情報基礎知識', sum_8]
        ]);
        var options = {
            legend: 'none',
            'chartArea': { top: 0, 'width': '100%', 'height': '100%' },
            pieHole: 0.5,
            colors: ['#1754EF', '#0F71BD', '#20BDDE', '#3CCEFE', '#B29EF3', '#6D46EC', '#4A17EF', '#3105C0'],

        };
        var chart_2 = new google.visualization.PieChart(document.getElementById('pieChart_language'));

        chart_2.draw(chartdata_2, options);
    });
}

window.onresize = function() {
    google.setOnLoadCallback(drawChart);
    google.setOnLoadCallback(drawChart_2);
    google.setOnLoadCallback(drawChart_3);
}