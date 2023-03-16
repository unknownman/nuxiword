<template>
  <h1 class="bg-blue-100 p-20">hello</h1>
  <div class="w-screen h-screen flex flex-col place-content-center place-items-stretch h-full font-podvaka border-20 border-red-400">
    <div ref="aliJoderRef"  class="bg-blue-500 flex h-1/2 cursor-pointer flex-col place-content-center place-items-center bg-black text-white hover:text-black hover:bg-white  text-3xl">ali Joder</div>
    <div ref="aliMasudRef" class="flex h-1/2 cursor-pointer flex-col place-content-center place-items-center bg-white text-black hover:text-white hover:bg-black  text-3xl">Ali Masud</div>
  </div>
  <!-- <div>{{ bg }}</div> -->
</template>
<script setup>
// const { getPosts } = useWpApi();
// const { data: posts } = await getPosts();


const aliMasudRef = ref()
const aliJoderRef = ref()
const isAliMasudHovered = useElementHover(aliMasudRef)
// const isAliJoderHovered = useElementHover(aliJoderRef)
// const bg = computed(() => {
//   if(!isAliJoderHovered.value && !isAliMasudHovered)
//     return false
//   else if(isAliJoderHovered)
//     return 'Ali Joder'
//   else if(isAliMasudHovered)
//     return 'Ali Masud'
//   return false
// })
</script>
