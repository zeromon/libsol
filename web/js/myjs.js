// $('#btn-br').click(function(){
//     let valTextarea = $('#content-txt').val();
//     let updateText = valTextarea+'<b></b>';
//     $('#content-txt').val(updateText);
// });

// $('#btn-code').click(function(){
//     let valTextarea = $('#solution-solution_answer').val();
//     let templateCode = '<figure><figcaption>Your code title</figcaption><pre><code>your code here</code></pre></figure>';
//     let updateText = valTextarea+templateCode;
//     $('#solution-solution_answer').val(updateText);
//     e.preventDefault();
// });

// $('#btn-submit').click(function(){
//     // replace php code open tag <?php to &lt;?php
//     let str = $('#content-txt').val();
//     let replacePhp = str.replace(/<?php/i, '&lt;?php');
//     alert(replacePhp);
//     $('#content-preview').html(replacePhp);
// });

var input;
var submit_form = false;
var filter_selector = '#grid-id-filters input';
var timeout = null;

$("body").on('beforeFilter', "#grid-id" , function(event) {
    return submit_form;
});

$("body").on('afterFilter', "#grid-id" , function(event) {
    submit_form = false;
});

$(document)
.on('input', filter_selector, function() {
    input = $(this).attr('name');
    clearTimeout(timeout);
    timeout = setTimeout(() => {
        if(submit_form === false) {
            submit_form = true;
            $("#grid-id").yiiGridView("applyFilter");
        }
    }, 1000);
})
.on('pjax:success', function() {
    let i = $("[name='"+input+"']");
    let val = i.val();
    // i.focus();
    // i.focus().val(val);
});