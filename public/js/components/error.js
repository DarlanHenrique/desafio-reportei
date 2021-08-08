$(document).ready(function () {
  for (var prop in errors) {
    var $el = $('*[name="' + prop + '"]').first();

    $el.addClass('is-invalid');
    $el.after('<span class="text-danger" role="alert"><small>' + errors[prop][0] + '</small></span>');

    $el.on('change', function () {
      $el.removeClass('is-invalid');
      $el.next('span.text-danger').remove();
    });
  }
});