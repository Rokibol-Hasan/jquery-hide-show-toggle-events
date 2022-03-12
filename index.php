<?php include 'inc/header.php'; ?>
<script>
    $(document).ready(function() {
        $("#hide").click(function() {
            $(".para").hide();
        });
    });
    $(document).ready(function() {
        $("#show").click(function() {
            $(".para").show();
        });
    });
    $(document).ready(function() {
        $("#toggle").click(function() {
            $(".para").toggle();
        });
    });
</script>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="action-list">
                <ul>
                    <li>
                        <button id="hide" class="btn btn-info mx-3">
                            Hide
                        </button>
                    </li>
                    <li>
                        <button id="show" class="btn btn-info mx-3">
                            show
                        </button>
                    </li>
                    <li>
                        <button id="toggle" class="btn btn-info mx-3">
                            toggle
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="para">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero,
                consectetur magni quo perspiciatis expedita deserunt incidunt, laborum,
                quidem modi eos laboriosam rem iste a numquam vitae animi veniam
                debitis? Officiis, tenetur. Libero architecto incidunt modi quas unde
                sint molestiae quasi labore, ducimus odio sit? Facilis voluptates
                laborum ipsam laboriosam quas minus inventore aperiam, a harum
                exercitationem eum unde eveniet iusto quo accusantium. Quo numquam
                officiis velit recusandae reprehenderit quae hic quidem culpa
                blanditiis, sed minima, beatae aliquam dignissimos voluptatem, assumenda
                distinctio! Corporis modi dolorem iure. Mollitia, nobis necessitatibus
                eum totam veritatis dolores odit! Ipsa error, magnam similique aliquid
                et iure?
            </div>
        </div>
    </div>
</div>

<?php include 'inc/footer.php'; ?>