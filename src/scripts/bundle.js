// import lazySizes from "lazysizes";
// import "lazysizes/plugins/native-loading/ls.native-loading";
// import "lazysizes/plugins/object-fit/ls.object-fit";
// import "what-input";
import MagicGrid from "magic-grid"

import "./modal";
import "./modalAttachment";
import "./form";
import "./drawer";
import "./menuScrollTo";
import "./inputFile";
import "./common";
import "./sitemap";
import "./onScroll";

/**
 * LazySizes configuration
 * https://github.com/aFarkas/lazysizes/#js-api---options
 */
// lazySizes.cfg.nativeLoading = {
//   setLoadingAttribute: false,
// };

let magicGrid = new MagicGrid({
  container: ".js-magic-grid", // Required. Can be a class, id, or an HTMLElement
  static: true, // Required for static content. Default: false.
  // items: 30, // Required for dynamic content. Initial number of items in the container.
  gutter: 15, // Optional. Space between items. Default: 25(px).
  // maxColumns: 5, // Optional. Maximum number of columns. Default: Infinite.
  useMin: true, // Optional. Prioritize shorter columns when positioning items? Default: false.
  // useTransform: true, // Optional. Position items using CSS transform? Default: True.
  // animate: true, // Optional. Animate item positioning? Default: false.
  // center: true, //Optional. Center the grid items? Default: true. 
});

magicGrid.listen();

