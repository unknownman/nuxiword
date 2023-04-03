<script lang="ts" setup>
useHead({
  title: "Home",
  meta: [
    {
      name: "description",
      content: "Home",
    },
  ],
  titleTemplate: "Ali's Blog - %s",
});
const { data:blogs, refresh, error } = await useWpApi().getPosts();
</script>
<template>
  <main>
    <!-- Blog Section Starts -->
    <section class="blogs">
      <div class="container py-10">
        <div class="grid sm:grid-cols-3 gap-10">
          <div v-for="blog in blogs">
            <p class="text-gray-500 font-black text-lg">{{ blog.title.rendered }}</p>
            <div v-html="blog.content.rendered"></div>
          </div>
        </div>
      </div>
    </section>
    <!-- Blog Section Ends  -->
  </main>
</template>
