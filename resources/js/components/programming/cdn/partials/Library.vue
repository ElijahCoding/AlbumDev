<template>
    <div class="card mt-3">
       <div class="card-header">
           <strong>{{ library.name }}</strong>
       </div>
       <div class="card-body">
         <h4 class="card-title">
             <span>
                 {{ library.link }}
             </span>
         </h4>

         <!-- <h5 class="card-text mt-1">

         </h5> -->

         <button class="btn btn-warning mt-1"
                 v-clipboard="library.link"
                 >
                 Copy
         </button>
         <a href="#" class="btn btn-primary mt-1 pull-right">
             Detail
         </a>

       </div>
   </div>
</template>

<script>
    export default {
        props: ['library']
    }
</script>
