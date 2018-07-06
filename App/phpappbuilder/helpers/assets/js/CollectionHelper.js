function CenturionCollectionHelperAdd(object) {
    var obj = object;
    var last_id = Number(obj.parentNode.parentNode.parentNode.getAttribute('last_id'))+1;
    var number = Number(obj.parentNode.parentNode.parentNode.getAttribute('number'));
    var count = Number(obj.parentNode.parentNode.parentNode.getAttribute('count'));
    var result = {};
    var this_id = 'id_'+number;
    result[this_id] = last_id;
    var i = number + 1;
    var counter = count;
    while (counter != 0) {
        var resp = 'id_'+i;
        result[resp]='<%='+resp+'%>';
        i++;
        counter--;
    }
    console.log(result);
    console.log(obj.parentNode.parentNode.parentNode.lastChild);
    obj.parentNode.parentNode.parentNode.getElementsByClassName('box-body')[0].insertAdjacentHTML('afterBegin', JsTemplater(obj.parentNode.parentNode.parentNode.childNodes[5].innerHTML,result));
    obj.parentNode.parentNode.parentNode.setAttribute('last_id', last_id)
}
function CenturionCollectionHelperRemove(object) {
    var obj = object;
    obj.parentNode.parentNode.parentNode.remove();
}