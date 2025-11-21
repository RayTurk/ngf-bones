<div id="wave">
</div>
<script>
      const wave = document.querySelector("#wave");
      let clipPath = "";

      const N = 100;
      for (let i = 0; i < N + 1; i++) {
        clipPath =
          clipPath +
          `${(100 / N) * i}% ${
            100 * (0.5 + 0.35 * Math.sin((2 * Math.PI * i) / N))
          }%,`;
      }

      clipPath = clipPath + "100% 100%,0 100%";

      clipPath = `polygon(${clipPath})`;

      wave.style["clip-path"] = clipPath;
    </script>