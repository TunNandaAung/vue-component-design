<script>
import ToggleInput from "./ToggleInput";

export default {
  //   props: ["tag"],
  //   data() {
  //     return {
  //     };
  //   },
  //   render(createElement) {
  //     return createElement(
  //       this.tag,
  //       {
  //         attrs: {
  //           class: "btn btn-blue"
  //         },
  //         on: {
  //           click: () => alert("Clicked!")
  //         }
  //       },
  //       "Hello world!"
  //     );
  //   }
  // };
  props: [],
  data() {
    return {
      toggled: true
    };
  },
  render(createElement) {
    return createElement(ToggleInput, {
      props: {
        toggled: this.toggled
      },
      on: {
        toggle: newValue => (this.toggled = newValue)
      }
    });
  }
};
</script>
