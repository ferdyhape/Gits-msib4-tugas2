<!-- ////////////////////////////////////////////////////////////////////////////////////////
                               the SCRIPT USED  
/////////////////////////////////////////////////////////////////////////////////////////////-->
<script>
      // Get the modal
      function detailProject(number, repository) {
        var modal = document.getElementById("myModal");
        var templateFeature = document.getElementById("template-feature");
        var titleElement = document.getElementById("titleElement");
        var link_repo = document.getElementById("to-repository");
        var span = document.getElementsByClassName("close")[0];
        const title = document.getElementById(`web-title-${number}`).textContent;
        const description = document.getElementById(`desc-${number}`).textContent;
        link_repo.href = repository;
        link_repo.target = '_blank';
        titleElement.innerHTML = title;
        templateFeature.innerHTML = description;

        modal.style.display = "block";
        span.onclick = function () {
          modal.style.display = "none";
        }
        window.onclick = function (event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }
      }
    </script>

    <script src="../assets/vendors/glightbox/js/glightbox.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script>
      filterSelection("all")

      function filterSelection(c) {
        var x, i;
        x = document.getElementsByClassName("filterDiv");
        if (c == "all") c = "";
        // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
        for (i = 0; i < x.length; i++) {
          w3RemoveClass(x[i], "show");
          if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
        }
      }

      // Show filtered elements
      function w3AddClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
          if (arr1.indexOf(arr2[i]) == -1) {
            element.className += " " + arr2[i];
          }
        }
      }

      // Hide elements that are not selected
      function w3RemoveClass(element, name) {
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
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>