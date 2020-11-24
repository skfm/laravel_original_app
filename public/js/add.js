function copyToClipboard() {
    // indexページのクリップボードのコピー
    const text = document.getElementById("copyTarget").innerText;
    const area = document.createElement("textarea");
    area.textContent = text;
    document.body.appendChild(area);
    area.select();
    document.execCommand("copy");
    document.body.removeChild(area);
    alert("コピー完了！");
}

$(function () {
    // ユーザーページのナビゲーション開閉
    $('.navbar-toggler').on('click',function(){
        $(this).toggleClass('toggled');
        $('.sidebar').toggleClass('opened');
    });

    // questionページのボタンアクション
    $(".form_item:not(:first-child)").hide();

    $("input[name]").on("click", function () {
    const number = $(this).attr("data-number");
    $("#" + number).css({
        "background-color": "#cc0000",
        "cursor": "pointer"
    });
    $("#" + number).on("click", function () {
        $(this).parents(".form_item").css("display", "none");
        $(this).parents(".form_item").next(".form_item").css("display", "block");
        $(".btn.next").css("background-color", "#ddd");
    });
    });

    $(".btn.prev").on("click", function () {
    $(this).parents(".form_item").css("display", "none");
    $(this).parents(".form_item").prev(".form_item").css("display", "block");
    $(".btn.next").css({
        "background-color": "#cc0000",
        "cursor": "pointer"
    });
    });

    // 結果ページのフェードイン、フェードアウト
    // $(".result_wrapper").hide().fadeIn(3300);
    let url = location.href ;
    if (url.match('result')) {
        $(document).ready(function () {
            let hsize = $("section").height();
            $("body.result").css("height", hsize + "px");
        });

        $(window).resize(function () {
            let hsize = $("section").height();
            $("body.result").css("height", hsize + "px");
        });
    }
});
