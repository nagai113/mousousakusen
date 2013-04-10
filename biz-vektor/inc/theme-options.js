jQuery(function(){
    // ページ離脱イベント
    jQuery(window).on('beforeunload',function(){
        return('変更した内容は保存しましたか？');
    });
    // Submitの場合のみ　ページ離脱イベント解除
    jQuery('form').on('submit',function(){
        jQuery(window).off('beforeunload');
    });

    // submitボタンにsubmitというIDをつけて
    // $('#submit').on('click',function...というのもありです。
    // また、jQuery ver 1.7.0 以前は on off がbind unbindとなります。
});