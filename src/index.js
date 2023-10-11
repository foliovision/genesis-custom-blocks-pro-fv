import { addFilter } from '@wordpress/hooks';
import GcbPostControl from './block/post-custom.js';

addFilter( "genesisCustomBlocks.controls","genesisCustomBlocksPro/addControls", ( initialControls ) => {
  console.log('initialControls', initialControls);

  // replace the post control with our custom one
  return {
    ... initialControls,
    ... {
      post : GcbPostControl,
    }
  }
}, 99);