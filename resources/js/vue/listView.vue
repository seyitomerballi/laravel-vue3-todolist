<template>
    <div v-for="(item,index) in items" :key="index">
      <list-item :item="item"
                 class="item"
                 v-on:itemchanged="$emit('reloadlist')"
                 />
    </div>
</template>

<script>
import listItem from "./listItem";

export default {
  name: "listView",
  props: ['items'],
  emits: ['reloadlist'],
  components: {
    listItem
  }
}
</script>

<style scoped>
.item {
  padding: 5px;
  margin-top: 5px;
  background: #e6e6e6;
}
</style>