$(function () {
  // マウスオーバー時
  $(".button-more").on("mouseover", function () {
    $(this).animate(
      {
        opacity: 0.5,
        marginLeft: 20,
      },
      100
    );
  });
  // マウスアウト時
  $(".button-more").on("mouseout", function () {
    $(this).animate(
      {
        opacity: 1.0,
        marginLeft: 0,
      },
      100
    );
  });
  // カルーセル
  $(".carousel").slick({
    autoplay: true,
    dots: true,
    infinite: true,
    autoplaySpeed: 5000,
    arrows: false,
  });

  // 入力チェック
  function inputCheck() {
    // console.log("inputCheck関数の呼び出し");
    // エラーメッセージのテキスト
    let message = "";
    // エラーがなければfalse,あればtrue
    let error = false;
    // エラーのチェック結果
    let result;

    // 名前のチェック
    if ($("#name").val() === "") {
      // エラーあり
      error = true;
      $("#name").css("background-color", "#f79999");
      message += "お名前を入力してください。\n";
    } else {
      // エラーなし
      error = false;
      $("#name").css("background-color", "#fafafa");
    }

    // フリガナのチェック
    if ($("#furigana").val() === "") {
      // エラーあり
      error = true;
      $("#furigana").css("background-color", "#f79999");
      message += "フリガナを入力してください。\n";
    } else {
      // エラーなし
      error = false;
      $("#furigana").css("background-color", "#fafafa");
    }

    // お問い合わせ内容のチェック
    if ($("#message").val() === "") {
      // エラーあり
      error = true;
      $("#message").css("background-color", "#f79999");
      message += "お問い合わせ内容を入力してください。\n";
    } else {
      // エラーなし
      error = false;
      $("#message").css("background-color", "#fafafa");
    }

    // メールアドレスのチェック
    if (
      $("#email").val() === "" ||
      $("#email").val().indexOf("@") === -1 ||
      $("#email").val().indexOf(".") === -1
    ) {
      // エラーあり
      error = true;
      $("#email").css("background-color", "#f79999");
      message +=
        "メールアドレスが未記入、または「＠」「.」が含まれていません。\n";
    } else {
      // エラーなし
      error = false;
      $("#email").css("background-color", "#fafafa");
    }

    // 電話番号のチェック
    if ($("#tel").val() != "" && $("#tel").val().indexOf("-") === -1) {
      // エラーあり
      error = true;
      $("#tel").css("background-color", "#f79999");
      message += "電話番号に「-」が含まれていません。\n";
    } else {
      // エラーなし
      error = false;
      $("#tel").css("background-color", "#fafafa");
    }
  }

  // 送信ボタンをクリックした時
  $("#submit").on("click", function (event) {
    // formタグによる送信を拒否
    event.preventDefault();
    // 入力チェックをした結果をresultに格納
    let result = inputCheck();
  });

  // フォーカスが外れたときにフォームの入力チェックをする
  $("#name").blur(function () {
    inputCheck();
  });
  $("#furigana").blur(function () {
    inputCheck();
  });
  $("#email").blur(function () {
    inputCheck();
  });
  $("#tel").blur(function () {
    inputCheck();
  });
  $("#message").blur(function () {
    inputCheck();
  });
  $("#agree").click(function () {
    inputCheck();
  });
});
