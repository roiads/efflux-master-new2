<template>
    <ul class="pagination">
    <li v-if="pagination.current_page > 1">
        <a href="javascript:void(0)" aria-label="Previous" v-on:click.prevent="changePage(pagination.current_page - 1)">
            <span aria-hidden="true">«</span>
            </a>
        </li>
    <li v-for="(page,index) in pagesNumber" :class="{'active': page == pagination.current_page}" :key="index">
        <a href="javascript:void(0)" v-on:click.prevent="changePage(page)">{{ page }}</a>
        </li>
    <li v-if="pagination.current_page < pagination.last_page">
        <a href="javascript:void(0)" aria-label="Next" v-on:click.prevent="changePage(pagination.current_page + 1)">
            <span aria-hidden="true">»</span>
            </a>
        </li>
    </ul>
</template>
<script>
  export default{
      props: {
      pagination: {
          type: Object,
          required: true
      },
      offset: {
          type: Number,
          default: 4
      }
    },
    computed: {
      pagesNumber() {
        if (!this.pagination.to) {
          return [];
        }
        let from = this.pagination.current_page - this.offset;
        if (from < 1) {
          from = 1;
        }
        let to = from + (this.offset * 2);
        if (to >= this.pagination.last_page) {
          to = this.pagination.last_page;
        }
        let pagesArray = [];
        for (let page = from; page <= to; page++) {
          pagesArray.push(page);
        }
          return pagesArray;
      }
    },
    methods : {
      changePage(page) {
        this.pagination.current_page = page;
        this.$emit('paginate');
      }
    }
  }
</script>

<style>
ul.pagination{
  margin-bottom: 0px;
  padding: 2px;
  background: #0001;
}
ul.pagination li{
  padding: 2px;
  width: auto;
  display: flex;
  flex-basis: auto;
  flex-shrink: 1;
  flex-grow: 1;
  padding-bottom: 0px;
}
ul.pagination li a{
  display: block;
  width: 100%;
  text-align: center;
  border-radius: 3px;
  padding:5px;
  color:#0005;
}
ul.pagination li a:hover{
  background:#0003;
  color:#fff;
}
</style>