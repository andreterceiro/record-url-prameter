fetch("http://www.terceiro.com.br/save_get/list.php").then(async function(response) {
    console.log(await response.text());
});