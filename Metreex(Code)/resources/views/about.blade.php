@extends('template')
@section('title') About us @endsection
<script type="text/javascript" src="/js/jquery-3.6.0.min.js"></script>
 <section id="hero-2" class="bg-fixed hero-section division">
 	<div id="table">
 		@include('table')
 	</div>

 	<script type="text/javascript">
 		$(document).on("click", '.pagination a', function(e) {
 			e.preventDefault();
 			let page = $(this).attr('href').split('page=')[1];
 			foo(page);
 		})

 		function foo(page) {
 			$.ajax({
 				type: 'GET',
 				url: '/about/table?page=' + page,
 				success: function(data) {
 					$("#table").html(data);
 				}
 			})
 		}
 	</script>
 </section>