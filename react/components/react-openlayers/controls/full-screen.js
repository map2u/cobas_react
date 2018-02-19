import * as React from 'react';
import * as ol from 'openlayers';
import {Util} from '../util';
import {Map} from '../map';
import PropTypes from 'prop-types';

export class FullScreen extends React.Component<any, any> {

  control: ol.control.FullScreen;

  options:  {
    className: undefined,
    label: undefined,
    labelActive: undefined,
    tipLabel: undefined,
    keys: undefined,
    target: undefined,
    source: undefined
  };

  events:  {
    'change': undefined,
    'propertychange': undefined
  };

  constructor(props) { super(props); }

  render() { return null; }

  componentDidMount () {
    let options = Util.getOptions(Object['assign'](this.options, this.props));
    this.control = new ol.control.FullScreen(options);
    this.context.mapComp.controls.push(this.control)

    let olEvents = Util.getEvents(this.events, this.props);
    for(let eventName in olEvents) {
      this.control.on(eventName, olEvents[eventName]);
    }
  }

}

FullScreen['contextTypes'] = {
  mapComp: PropTypes.instanceOf(Map),
  map: PropTypes.instanceOf(ol.Map)
};
