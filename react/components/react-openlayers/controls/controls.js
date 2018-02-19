import * as React from 'react';
import * as ol from 'openlayers';

import {Util} from '../util';
import PropTypes from 'prop-types';

// I wish I can name it as 'layers', not 'Layers'
export class Controls extends React.Component<any, any> {

  options:  {
    attribution  : undefined,
    attributionOptions: undefined,
    rotate: undefined,
    rotateOptions: undefined,
    zoom: undefined,
    zoomOptions: undefined
  };

  constructor(props) {
    super(props);
    this.options = Util.getOptions(Object['assign'](this.options, this.props));
  }

  render() {
    return (<div>{this.props.children}</div>);
  }

  componentDidMount () {} 

  componentWillUnmount () {}
}

Controls['contextTypes'] = {
  map: PropTypes.instanceOf(ol.Map)
};