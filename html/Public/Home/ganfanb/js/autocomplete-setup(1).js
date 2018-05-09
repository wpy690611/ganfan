AutoComplete.setup = function(params) {
    var withDefaultValue = function(paramName, defaultValue) {
        if (typeof params[paramName] == "undefined") {
            params[paramName] = defaultValue;
        }
    };

    withDefaultValue("inputElement", null);
    withDefaultValue("initTip", "");
    withDefaultValue("toolTip", "");
    withDefaultValue("dataSource", null);
    withDefaultValue("trClickCallback", null);
    withDefaultValue("trdbclickCallback", null);
    withDefaultValue("inputEnterCallback", null);
    withDefaultValue("divContainerId", "dd");
    withDefaultValue("tableId", "tt");
    withDefaultValue("itemNumberPerPage", 11);
    withDefaultValue("maxMatchedItemNumberAllowed", 10);
    withDefaultValue("displayZoneWidth", 240);
    withDefaultValue("displayZoneHeight", 210);

    withDefaultValue("tableIdentification", "hello");
    withDefaultValue("exceedMaxItemNumberPerPageClass", "prompt_limit");
    withDefaultValue("inItemNumberPerPageClass", "prompt_common");
    withDefaultValue("tableClass", "table_class");
    withDefaultValue("crossbeddedTrClassPrefix", "cross_tr_class_");
    withDefaultValue("titleTrClass", "title_tr_class");
    withDefaultValue("trSelectedClass", "tr_selected_class");
    withDefaultValue("tdClass", "td_class");
    withDefaultValue("tdTitleClass", "td_title_class");

    withDefaultValue("displayMapping", [
        { "title": "股票代码", "alt": "股票代码", "jsonattribute": "c", "displaypercentage": "30%" },
        { "title": "股票名称", "alt": "股票名称", "jsonattribute": "n", "displaypercentage": "40%" },
        { "title": "股票简称", "alt": "股票简称", "jsonattribute": "p", "displaypercentage": "30%" }
    ]);
    withDefaultValue("matchFields", ["c", "n", "p"]);
    withDefaultValue("primarykey", "c");
    withDefaultValue("textField", "c");
    withDefaultValue("textName", "n");

    withDefaultValue("ignoreUnExactMatchOnCheck", true);

    var attributes = ["inputElement", "dataSource", "trClickCallback", "trdbclickCallback", "inputEnterCallback"];
    for (var i in attributes) {
        if (typeof params[attributes[i]] == "string") {
            params[attributes[i]] = document.getElementById(params[attributes[i]]);
        }
    }
    if (!params["inputElement"]) {
        //alert("被托管的文本框不存在，初始化失败，请检查您的代码。");
        return null;
    }
    if (!params["dataSource"]) {
        alert("所需要的数据源不存在，初始化失败，请检查您的代码。");
        return null;
    }
    if (!params["displayMapping"]) {
        alert("数据源字段到展示区的显示映射未指定。");
        return null;
    }
    if (!params["matchFields"]) {
        alert("用于根据用户输入匹配的数据源字段集合未指定。");
        return null;
    }
    if (!params["primarykey"]) {
        alert("数据源中用于指定唯一性的字段未指定。");
        return null;
    }
    if (!params["textField"]) {
        alert("用户填充文本框的数据源字段未指定。");
        return null;
    }
    if (!params["textName"]) {
        alert("用户填充文本框的数据源字段未指定。");
        return null;
    }

    // displayZoneWidth 若未指定，则以 inputElement 的宽度计算，否则按指定宽度计算
    params.displayZoneWidth = params.displayZoneWidth ? params.displayZoneWidth : params.inputElement.clientWidth;

    var autoCompleteInstance = new AutoComplete(params.inputElement, params.dataSource, params.trClickCallback, params.trdbclickCallback, params.inputEnterCallback);
    autoCompleteInstance.inputClickCallback = params.inputClickCallback;
    if (!params["inputElement"].value) {
        params.inputElement.value = params.initTip;
    }
    params.inputElement.title = params.toolTip;
    autoCompleteInstance.params = params;
    return autoCompleteInstance;
}