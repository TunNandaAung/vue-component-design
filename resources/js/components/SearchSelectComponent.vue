<template>
  <div>
    <h1 class="font-normal text-3xl text-gray leading-none mb-8">Search Select Components</h1>
    <div class="md:w-1/2 bg-white rounded shadow-lg p-8">
      <div class="mb-4">
        <label class="form-label mb-2">Favorite Thrash Band</label>
        <search-select v-model="selectedBand" :options="bands" :filter-function="applySearchFilter"></search-select>
      </div>
      <div class="text-right">
        <button type="button" class="btn btn-blue">Save Changes</button>
      </div>
    </div>
  </div>
</template>

<script>
import SearchSelect from "./utilities/SearchSelect";

export default {
  components: {
    SearchSelect
  },
  data() {
    return {
      selectedBand: null,
      search: "",
      bands: [
        "Anthrax",
        "Dark Angel",
        "Death Angel",
        "Destruction",
        "Exodus",
        "Flotsam and Jetsam",
        "Kreator",
        "Megadeth",
        "Metallica",
        "Overkill",
        "Sepultura",
        "Slayer",
        "Testament"
      ]
    };
  },
  methods: {
    applySearchFilter(search, bands) {
      return bands.filter(band =>
        band.toLowerCase().startsWith(search.toLowerCase())
      );
    }
  }
};
</script>

<style>
</style>