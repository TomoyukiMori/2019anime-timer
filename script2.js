$(function () {
  var tbl_cnt = 1;
  // 追加ボタンをクリックした時の処理
  $('#add_btn').click(function () {
    var original = $('#form_set_' + tbl_cnt);
    tbl_cnt += 1;
    // クローンを作成し、元の後ろに設置。
    $(original)
      .clone()
      .insertAfter(original)
      // クローンのid属性を変更。
      .attr('id', 'form_set_' + tbl_cnt)
      // label要素のfor属性を変更。
      .find('label').each(function (idx, obj) {
        $(obj).attr(
          'for',
          $(obj).attr('for').replace(/_[0-9]+$/, '_' + tbl_cnt)
        );
      })
      .end()

      .find('input').each(function (idx, obj) {
        $(obj).attr({
          // id: $(obj).attr('id').replace(/_[0-9]+$/, '_' + tbl_cnt),
          // name: $(obj).attr('name').replace(/_[0-9]+$/, '_' + tbl_cnt)
        }).val('');
      });

  });
});
