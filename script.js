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
});
