<template>
  <div class="max-w-screen-xl p-5 mx-auto dark:bg-gray-800 dark:text-gray-100">
    <div class="grid grid-cols-1 gap-5 lg:grid-cols-4 sm:grid-cols-2" v-if="posts">
      <div
        v-for="(item, i) in posts"
        :key="i"
        class="relative flex items-end justify-start w-full text-left bg-center bg-cover h-96 dark:bg-gray-500"
        style="background-image: url('http://source.unsplash.com/random/240x320')"
      >
        <div
          class="absolute top-0 bottom-0 left-0 right-0 bg-gradient-to-b dark:via-transparent dark:from-gray-900 dark:to-gray-900"
        ></div>
        <div
          class="absolute top-0 left-0 right-0 flex items-center justify-between mx-5 mt-3"
        >
          <a
            rel="noopener noreferrer"
            href="#"
            class="px-3 py-2 text-xs font-semibold tracking-wider uppercase dark:text-gray-100 bgundefined"
            >Politics</a
          >
          <div class="flex flex-col justify-start text-center dark:text-gray-100">
            <span class="text-3xl font-semibold leading-none tracking-wide">04</span>
            <span class="leading-none uppercase">Aug</span>
          </div>
        </div>
        <h2 class="z-10 p-5">
          <a
          v-if="item && item.title && item.title.rendered"
            rel="noopener noreferrer"
            href="#"
            class="font-medium text-md hover:underline dark:text-gray-100"
            v-html="item.title.rendered"
          />
        </h2>
      </div>
    </div>
  </div>
</template>
<script setup>
const { getPosts } = useWpApi();
const { data: posts } = await getPosts();
</script>
