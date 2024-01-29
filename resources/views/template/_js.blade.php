<script src="{{ asset('templates/campusdigital/js/jquery-3.2.1.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
{{-- <script src="{{ asset('templates/campusdigital/js/jquery.slicknav.min.js') }}"></script> --}}
{{-- <script src="{{ asset('templates/campusdigital/js/owl.carousel.min.js') }}"></script> --}}
{{-- <script src="{{ asset('templates/campusdigital/js/jquery-ui.min.js') }}"></script> --}}
{{-- <script src="{{ asset('templates/campusdigital/js/main.js') }}"></script> --}}
<script>
	var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
	var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
	  return new bootstrap.Tooltip(tooltipTriggerEl)
	})
</script>