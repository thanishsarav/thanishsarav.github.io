<html>
<head>
        <style>
            ul,
            #myUL {
                list-style-type: none;
            }
    
            #myUL {
                margin: 0;
                padding: 0;
            }
    
            .caret {
                cursor: pointer;
                -webkit-user-select: none;
                /* Safari 3.1+ */
                -moz-user-select: none;
                /* Firefox 2+ */
                -ms-user-select: none;
                /* IE 10+ */
                user-select: none;
                font-weight: bolder;
                font-size: xx-large;
                
                color: rgb(254, 253, 253);
                text-shadow: 3px 3px 3px rgb(20, 20, 20), 0 0 25px blue, 0 0 5px darkblue;
                border-radius:5%;
            }
    
            .caret::before {
                content: "\25B6";
                color: rgba(13, 246, 5, 0.991);
                display: inline-block;
                margin-right: 6px;
                color: rgb(251, 250, 250);
                text-shadow: 3px 3px 3px rgb(195, 3, 248), 0 0 45px red, 0 0 25px darkred;
            }
            
    
            .caret-down::before {
                -ms-transform: rotate(90deg);
                /* IE 9 */
                -webkit-transform: rotate(90deg);
                /* Safari */
                transform: rotate(90deg);
            }
    
            .nested {
                display: none;
            }
    
            .active {
                display: block;
            }
        </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
    <body>

<?php
$ft = array(
    "unknown" => array(
        "name" => "unknown",
        "wife" => "unknown",
        "children" => array(
            "kupanan" => array(
                "name" => "Kupanan gounder",
                "wife" => "agamal",
                "children" => array(
                    "palaniyandi" => array(
                        "name" => "palaniyandi gounder",
                        "wife" => "chinnamal",
                        "children" => array(
                            "sam" => array(
                                "name" => "sampath",
                                "wife" => "pushpalatha",
                                "children" => array(
                                    "sarav" => array(
                                        "name" => "saravanan",
                                        "wife" => "selvarani",
                                        "children" => array(
                                            "thanish",
                                            "mohitha"
                                        )
                                    ),
                                    "saranya" => array(
                                        "name" => "saranya",
                                        "husband" => "madhavan",
                                        "children" => array(
                                            "sanjhu",
                                            "shriya"
                                        )
                                    )
                                )
                            ),
                            "nallam" => array(
                                "name" => "nallamalle",
                                "husband" => "karupaiaa",
                                "children" => array(
                                    "poogkothai" => array(
                                        "name" => "poogkothai",
                                        "husband" => "none"
                                    ),
                                    "dhevi" => array(
                                        "name" => "dhevi",
                                        "husband" => "none",
                                        "children" => array(
                                            "nekil",
                                            "shriya"
                                        )
                                    )
                                )
                            )
                        )
                    ),
                    "kanthasami" => array(
                        "name" => "kanthasami",
                        "wife" => "rathanam",
                        "children" => array(
                            "indumathi" => array(
                                "name" => "indumathi",
                                "husband" => "none",
                                "children" => array(
                                    "kaviya",
                                    "shriya"
                                )
                            ),
                            "parthiban" => array(
                                "name" => "parthiban",
                                "husband" => "none",
                                "children" => array(
                                    "nithin",
                                    "anisha"
                                )
                            )
                        )
                    )
                )
            ),
            "marappa" => array(
                "name" => "marappa",
                "wife" => "Gandhi",
                "children" => array(
                    "prekas" => array(
                        "name" => "prekas",
                        "wife" => "unknown"
                    ),
                    "unknown" => array(
                        "name" => "unknown",
                        "wife" => "unknown"
                    )
                )
            )

        ),

    )
);

?>
<div>
    <ul id="myUL">
        <li><span class="caret"><?php
        echo $ft['unknown']['name'];
        ?></span>

            <ul class="nested">
                <li><span class="caret"><?php
                echo $ft['unknown']['children']["kupanan"]['name'];
                ?> </span>

                    <ul class="nested">
                        <li><span class="caret"> <?php
                        echo $ft['unknown']['children']["kupanan"]['children']["palaniyandi"]['name'];
                        ?> </span>

                            <ul class="nested">
                                <li><span class="caret"><?php
                                echo $ft['unknown']['children']["kupanan"]['children']["palaniyandi"]['children']['sam']['name'];
                                ?></span>

                                    <ul class="nested">
                                        <li><span class="caret"><?php
                                        echo $ft['unknown']['children']["kupanan"]['children']["palaniyandi"]['children']['sam']['children']['sarav']['name'];
                                        ?></span>
                                            <ul class="nested">
                                                <li><span class="caret"><?php
                                                echo $ft['unknown']['children']["kupanan"]['children']["palaniyandi"]['children']['sam']['children']['sarav']['children'][0];
                                                ?></span></li>
                                                <li><span class="caret"><?php
                                                echo $ft['unknown']['children']["kupanan"]['children']["palaniyandi"]['children']['sam']['children']['sarav']['children'][1];
                                                ?></span></li>
                                            </ul>
                                        </li>
                                        <li><span class="caret"><?php
                                                echo $ft['unknown']['children']["kupanan"]['children']["palaniyandi"]['children']['sam']['children']['saranya']['name'];
                                                ?></span>

                                            <ul class="nested">
                                                <li><span class="caret"><?php
                                                echo $ft['unknown']['children']["kupanan"]['children']["palaniyandi"]['children']['sam']['children']['saranya']['children'][0];
                                                ?></span></li>
                                                <li><span class="caret"><?php
                                                echo $ft['unknown']['children']["kupanan"]['children']["palaniyandi"]['children']['sam']['children']['saranya']['children'][1];
                                                ?></span></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><span class="caret"><?php
                                                echo $ft['unknown']['children']["kupanan"]['children']["palaniyandi"]['children']['nallam']['name'];
                                                ?></span>
                                    <ul class="nested">
                                        <li><span class="caret"> <?php
                                                echo $ft['unknown']['children']["kupanan"]['children']["palaniyandi"]['children']['nallam']['children']["poogkothai"]['name'];
                                                ?></span></li>
                                        <li><span class="caret"><?php
                                                echo $ft['unknown']['children']["kupanan"]['children']["palaniyandi"]['children']['nallam']['children']["dhevi"]['name'];
                                                ?> </span>

                                            <ul class="nested">
                                                <li><span class="caret"><?php
                                                echo $ft['unknown']['children']["kupanan"]['children']["palaniyandi"]['children']['nallam']['children']["dhevi"]['children'][0];
                                                ?></span></li>
                                                <li><span class="caret"><?php
                                                echo $ft['unknown']['children']["kupanan"]['children']["palaniyandi"]['children']['nallam']['children']["dhevi"]['children'][1];
                                                ?></span></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <li><span class="caret"><?php
                                                echo $ft['unknown']['children']["kupanan"]['children']["kanthasami"]['name'];
                                                ?></span>

                            <ul class="nested">
                                <li><span class="caret"><?php
                                                echo $ft['unknown']['children']["kupanan"]['children']["kanthasami"]['children'][ "indumathi"]['name'];
                                                ?></span>

                                    <ul class="nested">
                                        <li><span class="caret"><?php
                                                echo $ft['unknown']['children']["kupanan"]['children']["kanthasami"]['children'][ "indumathi"]['children'][0];
                                                ?></span></li>
                                        <li><span class="caret"><?php
                                                echo $ft['unknown']['children']["kupanan"]['children']["kanthasami"]['children'][ "indumathi"]['children'][1];
                                                ?></span></li>
                                    </ul>
                                </li>
                                <li><span class="caret"><?php
                                                echo $ft['unknown']['children']["kupanan"]['children']["kanthasami"]['children'][ "parthiban"]['name'];
                                                ?></span>

                                    <ul class="nested">
                                        <li><span class="caret"> <?php
                                                echo $ft['unknown']['children']["kupanan"]['children']["kanthasami"]['children'][ "parthiban"]['children'][0];
                                                ?></span></li>
                                        <li><span class="caret"><?php
                                                echo $ft['unknown']['children']["kupanan"]['children']["kanthasami"]['children'][ "parthiban"]['children'][1];
                                                ?></span></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><span class="caret"><?php
                                                echo $ft['unknown']['children']['marappa']['name'];
                                                ?></span>

                    <ul class="nested">
                        <li><span class="caret"><?php
                                                echo $ft['unknown']['children']['marappa']['children']['prekas']['name'];
                                                ?></span></li>
                        <li><span class="caret"><?php
                                                echo $ft['unknown']['children']['marappa']['children']['unknown']['name'];
                                                ?></span></li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</div>
</div>
</div>
<script>
    var toggler = document.getElementsByClassName("caret");
    var i;

    for (i = 0; i < toggler.length; i++) {
        toggler[i].addEventListener("click", function () {
            this.parentElement.querySelector(".nested").classList.toggle("active");
            this.classList.toggle("caret-down");
        });
    }
</script>
</body>
</html>