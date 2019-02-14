$('#btn-br').click(function(){
    let valTextarea = $('#content-txt').val();
    let updateText = valTextarea+'<b></b>';
    $('#content-txt').val(updateText);
});

$('#btn-code').click(function(){
    let valTextarea = $('#solution-solution_answer').val();
    let templateCode = '<figure><figcaption>Your code title</figcaption><pre><code>your code here</code></pre></figure>';
    let updateText = valTextarea+templateCode;
    $('#solution-solution_answer').val(updateText);
    e.preventDefault();
});

$('#btn-submit').click(function(){
    // replace php code open tag <?php to &lt;?php
    let str = $('#content-txt').val();
    let replacePhp = str.replace(/<?php/i, '&lt;?php');
    alert(replacePhp);
    $('#content-preview').html(replacePhp);
});