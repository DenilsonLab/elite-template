$(window).ready(function () {
  $(".skill-per").each(function () {
    var $this = $(this);
    var per = $this.attr("per");
    $this.css("width", per + "%");
    $({
      animatedValue: 0
    }).animate({
      animatedValue: per
    }, {
      duration: 1000,
      step: function () {
        $this.attr("per", Math.floor(this.animatedValue) + "%");
      },
      complete: function () {
        $this.attr("per", Math.floor(this.animatedValue) + "%");
      }
    });
  });



  // Portfolio filters
  $('.filters ul li').click(function () {
    $('.filters ul li').removeClass('list-inline-item-selected');
    $(this).addClass('list-inline-item-selected');
    var data = $(this).attr('data-filter');
    $grid.isotope({
      filter: data
    })
  });

  var $grid = $(".portfolio__items").isotope({
    itemSelector: ".all",
    percentPosition: true,
    masonry: {
      columnWidth: ".all"
    }
  })

  //Projects Counter
  const counters = document.querySelectorAll(".counter");

  counters.forEach(counter => {
    counter.innerText = '0'
    const target = +counter.getAttribute('data-target');
    const interval = target / 100;

    const updateCounter = () => {
      const value = +counter.innerText;
      if (value < target) {
        counter.innerText = Math.ceil(value + interval);

        setTimeout(() => {
          updateCounter()
        }, 20);
      }
    }

    updateCounter();

  });


  $(window).scroll(function () {
    if ($(this).scrollTop() > 5) {
      $(".navbar").addClass("fixed-me");
      $(".navbar").addClass("animate__animated animate__fadeInDown ");
    } else {
      $(".navbar").removeClass("fixed-me");
      $(".navbar").removeClass("animate__animated animate__fadeInDown ");
    }
  });


  $(".testimonials").owlCarousel({
    stagePadding: 0,
    items: 1,
    loop: true,
    margin: 0,
    singleItem: true,
    nav: true,
    navText: [
      "<i class='fa fa-caret-left'></i>",
      "<i class='fa fa-caret-right'></i>"
    ],
    dots: true,
    margin: 20,
    responsiveClass: true,
    responsive: {
      0: {
        nav: false
      },
      991: {
        nav: true
      },

    }
  });

  $(".client-list").owlCarousel({
    stagePadding: 0,
    items: 4,
    dots: false,
    loop: true,
    margin: 20,
    responsiveClass: true,
    responsive: {
      0: {
        items: 3,
        nav: false,
        dots: true,
        center: true
      },
      600: {
        items: 3,
        nav: false,
        dots: true,
        center: true
      },
      1000: {
        items: 3,
        loop: true,
        dots: true,
        center: true
      }
    }
  });

  $(".blog-posts-list").owlCarousel({
    center: true,
    stagePadding: 0,
    items: 3,
    dots: true,
    loop: true,
    margin: 10,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        nav: false,
        dots: true,
        center: true
      },
      600: {
        items: 1,
        nav: false,
        dots: true,
        center: true
      },
      1000: {
        items: 3,
        loop: true,
        dots: true,
        center: true
      }
    }
  });

  // Contact Form

  $(function () {
    function after_form_submitted(data) {
      console.log(data);
      if (data.result == 'success') {
        $('form#contact_form').hide();
        $('#success_message').show();
        $('#error_message').hide();
      } else {
        $('#error_message').append('<ul></ul>');

        jQuery.each(data.errors, function (key, val) {
          $('#error_message ul').append('<li>' + key + ':' + val + '</li>');
        });
        $('#success_message').hide();
        $('#error_message').show();

        //reverse the response on the button
        $('button[type="button"]', $form).each(function () {
          $btn = $(this);
          label = $btn.prop('orig_label');
          if (label) {
            $btn.prop('type', 'submit');
            $btn.text(label);
            $btn.prop('orig_label', '');
          }
        });

      } //else
    }

    $('#contact_form').validate({
      rules: {
        name: {
          required: true,
        },
        email: {
          required: true,
          minlength: 5,
          email: true
        },
        subject: {
          required: true,
          minlength: 5
        },
        message: {
          required: true,
          minlength: 5
        }
      },

      submitHandler: function (form) {
        $form = $('#contact_form');

        $('button[type="submit"]', $form).each(function () {
          $btn = $(this);
          $btn.prop('type', 'button');
          $btn.prop('orig_label', $btn.text());
          $btn.text('Sending ...');
        });


        $.ajax({
          type: "POST",
          url: 'includes/mailer.php',
          data: $form.serialize(),
          success: after_form_submitted,
          dataType: 'json'
        });
      }
    });

  });
});