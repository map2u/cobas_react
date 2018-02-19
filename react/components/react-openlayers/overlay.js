import * as React from 'react';
import * as ReactDOM from 'react-dom';
import * as ol from 'openlayers';
import {Util} from './util';
import {Map} from './map';
import PropTypes from 'prop-types';

export class Overlay extends React.Component<any, any> {

  constructor(props) {
    super(props);
    this.props=props;
    console.log('Overlay constructor');
  }
  overlay: ol.Overlay;
  el: HTMLElement;

  options:  {
    id: undefined,
    element: undefined,
    offset: undefined,
    position: undefined,
    stopEvent: undefined,
    insertFirst: undefined,
    autoPan: undefined,
    autoPanAnimation: undefined,
    autoPanMargin: undefined
  };

  events:  {
    'change': undefined,
    'change:element': undefined,
    'change:map': undefined,
    'change:offset': undefined,
    'change:position': undefined,
    'change:positioning': undefined,
    'propertychange': undefined
  };

  render() {
    return (
      <div>
        {this.props.children}
      </div>
    );
  }

  componentDidMount () {
    let options = Util.getOptions( Object['assign'](this.options, this.props));
    options.element = ReactDOM.findDOMNode(this).querySelector('div');
    // console.log('options.element', options.element);
    this.overlay = new ol.Overlay(options);
    this.context.mapComp.overlays.push(this.overlay);
  }
}

Overlay['contextTypes'] = {
  mapComp: PropTypes.instanceOf(Object),
  map: PropTypes.instanceOf(ol.Map)
};
