<div class="modal show" id="createTempSample" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="padding-right:0px;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document" style="padding: 20px 0;">
        <div class="modal-content" style="border-radius: 5px;">
            <div class="modal-header" style="
            border-top-right-radius: 5px;
            border-top-left-radius: 5px;
            color: white;
            background: linear-gradient(90deg,rgb(164 4 107) 0%, rgb(52 3 130) 100%);
            padding: 5px;
            border-bottom: 0;
            height: 30px;
            ">
            </div>
            <div class="modal-body" class="col-sm-12" style="padding:0;">
                    <form id="custom-form" class="custom-form">
                        <div class="custom-form__group">
                            <input type="text" name="name" id="name" placeholder="You name" required>
                            <label class="group__label" for="name">Name</label>
                        </div>
                        <div class="custom-form__group">
                            <input type="email" name="email" id="email" placeholder="Your e-mail" required>
                            <label class="group__label" for="email">E-mail</label>
                        </div>
                        <div id="datalist" class="custom-form__group datalist">
                            <input autocomplete="off" id="datalist-input" class="datalist-input" type="text" name="curso" title="Choose wisely" placeholder="Select something" required>
                            <label class="group__label" for="datalist-input">Thing</label>
                            <i class="datalist-icon icon iconfont icon-arrow"></i>
                            <ul id="datalist-ul" class="datalist-ul"></ul>
                        </div>
                    </form>
            </div>
            <div style="background: linear-gradient(90deg,rgb(164 4 107) 0%, rgb(52 3 130) 100%);height:10px;">
            </div>
        </div>
    </div>
</div>
@section('stylesheet')
<style>
    @media (min-width: 768px) {
        .shift {
            width: 600px;
            margin: 30px auto;
        }
    }
</style>
@endsection
 <script>
     function mascara(i) {
    const v = i.value;

    if (isNaN(v[v.length - 1])) {
        // impede entrar outro caractere que não seja número
        i.value = v.substring(0, v.length - 1);
        return;
    }

    i.setAttribute("maxlength", "14");
    if (v.length == 3 || v.length == 7) i.value += ".";
    if (v.length == 11) i.value += "-";
}

function formataCPF(i) {
    let cpf = i.value;
    cpf = cpf.replace(/[^\d]/g, "");

    i.value = cpf.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, "$1.$2.$3-$4");
}

// @todo(myself) Give credits to the guy who made this, and make accessibility adjustments
class DataList {
    constructor(containerId, inputId, listId, options) {
        this.containerId = containerId;
        this.inputId = inputId;
        this.listId = listId;
        this.options = options;
    }

    create(filter = "") {
        const list = document.getElementById(this.listId);
        const filterOptions = this.options.filter(
            (d) =>
                filter === "" ||
                d.text.toLowerCase().includes(filter.toLowerCase())
        );
        if (filterOptions.length === 0) {
            list.classList.remove("active");
            filterOptions.push({
                value: "",
                text: "No value found with theses parameters."
            });
        } else {
            list.classList.add("active");
        }

        list.innerHTML = filterOptions
            .map((o) => `<li data-value=${o.value}><span>${o.text}</span></li>`)
            .join("");
    }

    addListeners(datalist) {
        const container = document.getElementById(this.containerId);
        const input = document.getElementById(this.inputId);
        const list = document.getElementById(this.listId);
        document.addEventListener("click", (e) => {
            if (!e.target.closest(`#${this.containerId}`)) {
                container.classList.remove("active");
            }
        });

        container.addEventListener("click", (e) => {
            if (e.target.id === this.inputId) {
                container.classList.add("active");
            } else if (e.target.classList.contains("datalist-icon")) {
                container.classList.toggle("active");
                input.focus();
            }

            if (container.classList.contains("active")) {
                const rect = list.getBoundingClientRect();
                if (
                    !(
                        rect.top >= 0 &&
                        rect.bottom <=
                            (window.innerHeight ||
                                document.documentElement.clientHeight)
                    )
                ) {
                    list.classList.add("datalist-ul--up");
                }
            }
        });

        input.addEventListener("focus", (e) => {
            container.classList.add("active");
        });

        input.addEventListener("input", (e) => {
            if (!container.classList.contains("active")) {
                container.classList.add("active");
            }

            datalist.create(input.value);
        });

        list.addEventListener("click", (e) => {
            if (e.target.nodeName.toLocaleLowerCase() === "li") {
                if (!e.target.dataset.value) return;
                input.value = e.target.innerText;
                container.classList.remove("active");
                datalist.create();
                input.setCustomValidity("");
            }
        });
    }
}

const data = [
    {
        value: "1",
        text: "Schadenfreunde"
    },
    {
        value: "2",
        text: "Mein Gott"
    },
    {
        value: "3",
        text: "Es ist mein Teil"
    },
    {
        value: "4",
        text: "Heute treff' ich einen Herrn"
    },
    {
        value: "5",
        text: "Hallelujah"
    },
    {
        value: "6",
        text: "COVID-19"
    },
    {
        value: "7",
        text: "SARS"
    },
    {
        value: "8",
        text: "O jogo"
    }
];

const datalist = new DataList(
    "datalist",
    "datalist-input",
    "datalist-ul",
    data
);

datalist.create();
datalist.addListeners(datalist);

</script>
<!-- <script>
     $(document).ready(function() {

     });
</script>
   
<script type="text/javascript">

    $('.add-subtemp-sample').click(function(e){
         e.preventDefault();
         var title = $("textarea[name='sub_task_title']").val();
         var description = $("textarea[name='sub_task_description']").val();

         var html = '<div class="row list-subtemp"><div class="col-sm-10 body-sutemp" style="top: 12px;"><div style="font-weight: bold;"><div class="title-label"><i class="fa fa-angle-double-right" style="font-weight: bold;margin-right: 10px;"></i><span class="title-span">'+title+
         '</span></div></div><div style="margin-left: 22px;"><div class="description-label"><i class="fa fa-file-text-o" style="color:green;margin-right: 5px;"></i><span class="description-span">'+description+
         '</span></div></div></div><div class="col-sm-2 control-subtemp" style="display: inline-flex;top: 15px;"><div class="btn btn-edit " style="padding: 5px;margin-right: 10px;">'+
         '<span style="font-size: 22px;font-weight: bold;"><i class="fa fa-edit" style="color: #0475d6;"></i></span></div><div class="btn btn-remove " style="padding: 4px;">'+
         '<span style="font-size: 22px;font-weight: bold;"><i class="fa fa-trash" style="color: red;"></i></span></div></div></div>';

        $(".subtemp").append(html);

        $("textarea[name='sub_task_title']").val('');
        $("textarea[name='sub_task_description']").val('');
    });
    
   
    $(".subtemp").on("click", ".btn-remove", function(){
        $(this).parents(".list-subtemp").remove();
    });
    
    $(".subtemp").on("click", ".btn-edit", function(){
        var title = $(this).parents(".list-subtemp").find(".title-span:eq(0)").text();
        var description = $(this).parents(".list-subtemp").find(".description-span:eq(0)").text();

        $(this).parents(".list-subtemp").find(".body-sutemp:eq(0)").css("display","inline-flex");
    
        $(this).parents(".list-subtemp").find(".title-label:eq(0)").html('<input class="form-control" name="edit_title" value="'+title+'">');

        $(this).parents(".list-subtemp").find(".description-label:eq(0)").html('<input class="form-control" name="edit_description" value="'+description+'">');
    
        $(this).parents(".list-subtemp").find(".control-subtemp:eq(0)").html('<div class="btn btn-update" style="padding: 5px;margin-right: 10px;">'+
         '<span style="font-size: 22px;font-weight: bold;"><i class="fa fa-save" style="color: #0475d6;"></i></span></div><div class="btn btn-cancel"style="padding: 4px;">'+
         '<span style="font-size: 22px;font-weight: bold;"><i class="fa fa-hand-stop-o" style="color: red;"></i></span></div>')
        

        $(this).hide();
    });
   
    $(".subtemp").on("click", ".btn-cancel", function(){
        var title = $(this).parents(".list-subtemp").find(".title-span:eq(0)").text();
        var description = $(this).parents(".list-subtemp").find(".description-span:eq(0)").text();

        $(this).parents(".list-subtemp").find(".body-sutemp:eq(0)").css("display","block");
    
        $(this).parents(".list-subtemp").find(".title-label:eq(0)").html('<i class="fa fa-angle-double-right" style="font-weight: bold;margin-right: 10px;"></i><span class="title-span">'+title+'</span>');

        $(this).parents(".list-subtemp").find(".description-label:eq(0)").html('<i class="fa fa-file-text-o" style="color:green;margin-right: 5px;"></i><span class="description-span">'+description+'</span>');

        $(this).parents(".list-subtemp").find(".control-subtemp:eq(0)").html('<div class="btn btn-edit" style="padding: 5px;margin-right: 10px;">'+
         '<span style="font-size: 22px;font-weight: bold;"><i class="fa fa-edit" style="color: #0475d6;"></i></span></div><div class="btn btn-remove"style="padding: 4px;">'+
         '<span style="font-size: 22px;font-weight: bold;"><i class="fa fa-trash" style="color: red;"></i></span></div>')

        $(this).hide();
    });
   
    $(".subtemp").on("click", ".btn-update", function(){
        var title = $(this).parents(".list-subtemp").find("input[name='edit_title']").val();
        var description = $(this).parents(".list-subtemp").find("input[name='edit_description']").val();

        $(this).parents(".list-subtemp").find(".body-sutemp:eq(0)").css("display","block");

        $(this).parents(".list-subtemp").find(".title-label:eq(0)").html('<i class="fa fa-angle-double-right" style="font-weight: bold;margin-right: 10px;"></i><span class="title-span">'+title+'</span>');
        $(this).parents(".list-subtemp").find(".description-label:eq(0)").html('<i class="fa fa-file-text-o" style="color:green;margin-right: 5px;"></i><span class="description-span">'+description+'</span>');
     
        
        $(this).parents(".list-subtemp").find(".control-subtemp:eq(0)").html('<div class="btn btn-edit" style="padding: 5px;margin-right: 10px;">'+
         '<span style="font-size: 22px;font-weight: bold;"><i class="fa fa-edit" style="color: #0475d6;"></i></span></div><div class="btn btn-remove"style="padding: 4px;">'+
         '<span style="font-size: 22px;font-weight: bold;"><i class="fa fa-trash" style="color: red;"></i></span></div>')
        $(this).hide();
    });
    
</script> -->
