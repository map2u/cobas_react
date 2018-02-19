import * as React from 'react';
import * as ol from 'openlayers';
import {Util} from '../util';
import {Map} from '../map';
import PropTypes from 'prop-types';

export class Rotate extends React.Component<any, any> {

  control: ol.control.Rotate;

  options:  {
    className: undefined,
    label: undefined,
    tipLabel  : undefined,
    duration: undefined,
    autoHide: undefined,
    render: undefined,
    resetNorth: undefined,
    target: undefined
  };

  events:  {
    'change': undefined,
    'propertychange': undefined
  };

  constructor(props) { super(props); }

  render() { return null; }

  componentDidMount () {
    let options = Util.getOptions(Object['assign'](this.options, this.props));
    this.control = new ol.control.Rotate(options);
    this.context.mapComp.controls.push(this.control)

    let olEvents = Util.getEvents(this.events, this.props);
    for(let eventName in olEvents) {
      this.control.on(eventName, olEvents[eventName]);
    }
  }

}

Rotate['contextTypes'] = {
  mapComp: PropTypes.instanceOf(Map),
  map: PropTypes.instanceOf(ol.Map)
};
