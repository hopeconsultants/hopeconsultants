var DatatableRemoteAjaxDemo = function () {
    var t = function () {
        var t = $(".m_datatable").mDatatable({

            data: {
                type: "remote",
                source: {
                    read: {
                        method: "get",
                        url: ajaxUrl
                    }
                },
                saveState: {
                    cookie: !1,
                    webstorage: !1
                },
                serverPaging: !0,
                serverFiltering: !0,
                serverSorting: !0
            },
            search: {
                input: $("#generalSearch")
            },
            columns: columns
        }),
        e = t.getDataSourceQuery();

        $("#m_form_status").on("change", function () {
            var e = t.getDataSourceQuery();
            e.Status = $(this).val().toLowerCase(), t.setDataSourceQuery(e), t.load()
        }).val(void 0 !== e.Status ? e.Status : ""), $("#m_form_type").on("change", function () {
            var e = t.getDataSourceQuery();
            e.Type = $(this).val().toLowerCase(), t.setDataSourceQuery(e), t.load()
        }).val(void 0 !== e.Type ? e.Type : ""), $("#m_form_status, #m_form_type").selectpicker()
    };
    return {
        init: function () {
            t()
        }
    }
}();
jQuery(document).ready(function () {
    DatatableRemoteAjaxDemo.init();
});
