<@extends('layouts.master')
@section('links')
    @parent
    <link rel="stylesheet" href="{{asset('css/projectsStyle.css')}}">
@endsection
@section('content')

    <div class="mainn">

        <h1>Telepathy Bean</h1>
        <h2>Projects</h2>

        <div id="myBtnContainer">
            <button class="btn active" onclick="filterSelection('all')"> All projects</button>
            <button class="btn" onclick="filterSelection('web')"> Web Design</button>
            <button class="btn" onclick="filterSelection('oop')"> Software</button>
            <button class="btn" onclick="filterSelection('combined')"> Combined</button>
        </div>

        <div class="row">
            <div class="column web">
                <div class="content">
                    <img src="../drawable/jaki-site.png" alt="Jacquline">
                    <h4>Jacqueline's portfolio</h4>
                    <p>Homepage</p>
                </div>
            </div>
            <div class="column web">
                <div class="content">
                    <img src="../drawable/kris-site.png" alt="Kris">
                    <h4>Christian's portfolio</h4>
                    <p>Homepage</p>
                </div>
            </div>
            <div class="column web">
                <div class="content">
                    <img src="../drawable/WEBdev.png" alt="Web">
                    <h4>Web development - mutual project</h4>
                    <p>Homepage</p>
                </div>
            </div>

            <div class="column oop">
                <div class="content">
                    <img src="../drawable/jaki-pizza.png" alt="Software">
                    <h4>Pizza app</h4>
                    <p>Option 1</p>
                </div>
            </div>
            <div class="column oop">
                <div class="content">
                    <img src="../drawable/kris-pizza.png"  alt="Software">
                    <h4>Pizza app</h4>
                    <p>Option 2</p>
                </div>
            </div>

            <div class="column oop">
                <div class="content">
                    <img src="../drawable/pizza-1.png" alt="Software">
                    <h4>Pizza - mutual project</h4>
                    <p>C# application</p>
                </div>
            </div>
            <div class="column oop">
                <div class="content">
                    <img src="../drawable/building-app.jpg" alt="Software">
                    <h4>Building management system</h4>
                    <p>Mutual project</p>
                </div>
            </div>
            <div class="column combined">
                <div class="content">
                    <img src="../drawable/last project.png" alt="Combined">
                    <h4>Media Bazaar</h4>
                    <p>Mutual project</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        filterSelection("all")
        function filterSelection(c) {
            var x, i;
            x = document.getElementsByClassName("column");
            if (c == "all") c = "";
            for (i = 0; i < x.length; i++) {
                RemoveClass(x[i], "show");
                if (x[i].className.indexOf(c) > -1) AddClass(x[i], "show");
            }
        }

        function AddClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
            }
        }

        function RemoveClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                while (arr1.indexOf(arr2[i]) > -1) {
                    arr1.splice(arr1.indexOf(arr2[i]), 1);
                }
            }
            element.className = arr1.join(" ");
        }
        var btnContainer = document.getElementById("myBtnContainer");
        var btns = btnContainer.getElementsByClassName("btn");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function(){
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }
    </script>
@endsection
