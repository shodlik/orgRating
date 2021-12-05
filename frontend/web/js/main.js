var loadingArea = '<div class="laoding-area text-center"><div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></div>';


function GetOrgList() {
    document.getElementById("main-list-area").innerHTML = loadingArea;
    $.ajax({
        url: '/org/list',
        type: 'GET',
        success: function(data) {
            document.getElementById("main-list-area").innerHTML = data;
        },
        error: function(data){

        },
    });
}



function SearchOrg(key) {

    if(key.length>2) {

        $.ajax({
            url: '/org/list?key=' + key,
            type: 'GET',
            success: function (data) {
                document.getElementById("main-list-area").innerHTML = data;
            },
            error: function (data) {

            },
        });
    }
}



function GetProduts(tin) {
    document.getElementById("productList-area").innerHTML = loadingArea;
    $.ajax({
        url: '/org/get-products?tin='+tin,
        type: 'GET',
        success: function(data) {
            document.getElementById("productList-area").innerHTML = data;
        },
        error: function(data){

        },
    });
}

