import { Controller } from "@hotwired/stimulus";
import axios from "axios";

export default class extends Controller {
  static values = {
    infoUrl: String,
  };
  play(event) {
    event.preventDefault();

    // console.log(this.infoUrl);
    // console.log("Playing");

    axios.get(this.infoUrlValue).then((response) => {
      const audio = new Audio(response.data.url);
      audio.play();
      //   console.log(response);
    });
  }
}
