/*JavaScript Document*/
var currentDate, twentyMinutesLater, t;
$(document).ready(function () {
  $(".start_quiz ").on("click", function () {
    /* 
    currentDate = new Date();
      twentyMinutesLater = new Date(currentDate.getTime() + 20 * 60 * 1000);
      var x = setInterval(function () {
        var now = new Date().getTime();
        t = twentyMinutesLater - now;

        var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((t % (1000 * 60)) / 1000);
        //console.log(twentyMinutesLater, minutes, seconds)
        document.getElementById("minute").innerHTML = minutes;
        document.getElementById("second").innerHTML = seconds;
        if (t < 0) {
          clearInterval(x);
          document.getElementById("demo").innerHTML = "TIME UP";
          document.getElementById("day").innerHTML = "0";
          document.getElementById("hour").innerHTML = "0";
          document.getElementById("minute").innerHTML = "0";
          document.getElementById("second").innerHTML = "0";
        }
      }, 1000); */
  });

  (function StartQuiz() {
    this.settings = {
      results: [],
      dataPanel: 0,
    };

    this.loadQuiz = function () {
      $(".panel_one h1").show(500, function () {
        $(".start_quiz").addClass("started", 500);
      });

      $(".start_quiz ").on("click", function () {
        currentDate = new Date();
        twentyMinutesLater = new Date(currentDate.getTime() + 15 * 60 * 1000);

        var x = setInterval(function () {
          var now = new Date().getTime();
          t = twentyMinutesLater - now;

          var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((t % (1000 * 60)) / 1000);
          //console.log(t, twentyMinutesLater, minutes, seconds);
          document.getElementById("minute").innerHTML = minutes;
          document.getElementById("second").innerHTML = seconds;
          if (t < 0) {
            clearInterval(x);

            document.getElementById("minute").innerHTML = 0;
            document.getElementById("second").innerHTML = 0;
            var current = $(".item");
            current.addClass("hidden");
            showPanel(11);
            /* console.log(settings.results, settings.dataPanel, "9009"); */
            //$.ajax({});
          }
        }, 1000);

        showPanel(1);
        listenNext();
      });
    };

    this.showPanel = function (position) {
      var current = $("div[data-panel='" + (position - 1) + "']");
      settings.dataPanel = position;
      //current
      current
        .find(".wrapper")
        .animate({ left: "-=100px", opacity: 0 }, 500, function () {
          current.addClass("hidden");

          //show next
          var next = $("div[data-panel='" + position + "']");
          next.removeClass("hidden");
          showNext(next);
        });
    };

    this.showNext = function (next) {
      var wrapper = next.find(".wrapper");
      wrapper.fadeIn("500", function () {
        manageOptions(next);
      });
    };
    /* MANAGING THE OPTIONS */
    this.manageOptions = function (next) {
      var options = next.find(".options");
      var children = options.find("div");
      var counter = 0;

      children.each(function (i, el) {
        $(el).delay(counter).fadeIn(300);
        counter += 500;
      });

      children.on("click", function () {
        children.removeClass("active");
        next.addClass("valid");
        $(this).addClass("active");
      });
    };
    this.listenNext = function () {
      $(".next_question").on("click", function () {
        var next = $(this).data("next");

        if (validateSelection($(this))) {
          showPanel(next);
          ShowProgressAndStore(next);
        }
      });
    };

    this.validateSelection = function ($this) {
      var parent = $this.parents().eq(1);
      if (parent.hasClass("valid")) {
        return true;
      } else {
        $(".error").fadeIn("300", function () {
          $(this).delay(5000).fadeOut("300");
        });
        return false;
      }
    };

    this.ShowProgressAndStore = function (panel) {
      $(".progress .bar").animate({ width: "+=5%" }, 500);

      var options = $("div[data-panel='" + (panel - 1) + "']").find(".options");
      options.find("div").each(function (i, el) {
        if ($(this).hasClass("active")) {
          settings.results.push($(this).text());
          console.log(settings.results);
        }
      });
    };

    loadQuiz();
  })();
});
